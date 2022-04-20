<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cuota;
use App\Models\Numeracion;
use App\Models\numeraciones;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class PrestamoController
 * @package App\Http\Controllers
 */
class PrestamoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('can:prestamos.index')->only('index');
        $this->middleware('can:prestamos.create')->only('create','store');
        $this->middleware('can:prestamos.delete')->only('delete');
        $this->middleware('can:prestamos.update')->only('edit','update');
    }

    public function index()
    {
        $prestamos = Prestamo::paginate(10);        

        return view('prestamo.index', compact('prestamos'))
            ->with('i', (request()->input('page', 1) - 1) * $prestamos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestamo = new Prestamo();
        $hoy = date('Y-m-d');
        return view('prestamo.create', compact('prestamo','hoy'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $this->completarDatos($request);
        $correlacion = $this->obtenerCorrelacion();
        $correlacionFormateada = $this->completarCeros($correlacion);                
        $request['numero_operacion'] = $correlacionFormateada;
        request()->validate(Prestamo::$rules);
        $prestamos = Prestamo::create($request->all());
        $id = Prestamo::latest()->first()->id;
        $this->crearCuotas($request, $id);
        return redirect()->route('prestamos.show',$id)
        ->with('success', 'Prestamo creado satisfactoriamente.');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamo[] = array();
        $prestamoDatos = Prestamo::find($id);
        $cuota = Cuota::where('prestamos_id', $id)->get();
        $cliente = Cliente::where('NumDoc', $prestamoDatos->clientes_id)->get();
        $prestamo['prestamo'] = $prestamoDatos;
        $prestamo['cliente'] = $cliente;
        $prestamo['cuota'] = $cuota;
        return view('prestamo.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hoy = date('Y-m-d');
        $prestamo = Prestamo::find($id);        
        $cuotas = Cuota::where('prestamos_id', $id)->get();
        return view('prestamo.edit', compact('prestamo', 'hoy', 'cuotas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {       
        $request['numero_operacion'] = $prestamo['numero_operacion'];
        $request = $this->completarDatos($request);
        request()->validate(Prestamo::$rules);        
        Cuota::where('prestamos_id', $prestamo->id)->delete();
        $prestamo->update($request->all());
        $id = Prestamo::latest()->first()->id;        
        $this->crearCuotas($request, $id);
        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo agregado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prestamo = Prestamo::find($id)->delete();
        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo deleted successfully');
    }

    public function search(Request $documento)
    {
        $hoy = date('Y-m-d');
        $documento = $documento->clientes_id;
        $clientes = Cliente::where('NumDoc', $documento)->get();
        return $clientes;
    }

    public function cuotasCliente(Request $request)
    {        
        $idCliente = $request['clientes_id'];
        $prestamos = Prestamo::where('clientes_id', $idCliente)->get();
        return $prestamos;
    }
    public function buscarXNumOperacion(Request $request)
    {           
        if($request['buscarOperacion'] != ""){
            $num_operacion = $this->completarCeros($request['buscarOperacion']);
            $prestamos = Prestamo::where('numero_operacion', $num_operacion)->paginate(10);        
        }
        else{
            $prestamos = Prestamo::paginate(10);
        }
        return view('prestamo.index', compact('prestamos'))
            ->with('i', (request()->input('page', 1) - 1) * $prestamos->perPage());
    }
    
    public function completarDatos($request){
        $request['tipo_moneda'] = "PEN";
        $request['monto_x_cuota'] = 0;    
        $request['fecha_registro'] = date("Y-m-d H:i:s");
        $request['users_id'] = auth()->id();
        $request['estado_prestamo'] = 'pendiente';
        $request['saldo'] = $request['capital_total'];
        $request['totalPagoPMO'] = 0;
        return $request;
    }
    public function obtenerCorrelacion(){
        $obtenerCorrelacion = numeraciones::where('codigo', 'PTM')->get();        
        $correlacion = $obtenerCorrelacion[0]->correlacion + 1;
        numeraciones::where('codigo', 'PTM')->update([ 'correlacion' => $correlacion ]);
        return $correlacion;
    }
    public function crearCuotas($request,$id_prestamo){
        for ($i=0; $i < count($request['numero']); $i++) { 
            Cuota::create([
                'fecha_limite' => $request['fecha_limite'][$i],
                'monto' => $request['monto'][$i],
                'numero' => $request['numero'][$i],
                'estado' => 'pendiente',
                'interes' => $request['interes'][$i],
                'total' => $request['total'][$i],
                'prestamos_id' => $id_prestamo,
            ]);
        }
    }
    public function completarCeros($dato){
        return str_pad($dato, 8, "0", STR_PAD_LEFT);
    }
    public function realizarPagoCuota(Request $request){ 
        $saldoRestante = $request['saldo'] - $request['recepcion_pago'];
        $totalPagoPMO = $request['totalPagoPMO'] + $request['recepcion_total_pago'];        
        if($request['num_cuota'] == $request['numero']){            
            Prestamo::where('id', $request['prestamos_id'])
            ->update([
                'estado_prestamo' => 'finalizado',
                'saldo' => $saldoRestante,              
                'totalPagoPMO' => $totalPagoPMO,
            ]);
        }
        else{
            Prestamo::where('id', $request['prestamos_id'])
            ->update([
                'saldo' => $saldoRestante,
                'totalPagoPMO' => $totalPagoPMO,              
            ]);
        }

        Cuota::where('id', $request['id'])
        ->update([
            'estado' => 'pagado',
            'recepcion_pago' => $request['recepcion_pago'],
            'mora' => $request['mora'],
            'otros' => $request['otros'],
            'recepcion_total_pago' => $request['recepcion_total_pago'],
        ]);
        

        return redirect()->route('prestamos.show',$request['prestamos_id'])
        ->with('success', 'El cobro se realizo con exito');
    
    }
    
}
