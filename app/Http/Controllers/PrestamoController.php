<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cuota;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class PrestamoController
 * @package App\Http\Controllers
 */
class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //private $cliente;
    public function index()
    {
        $prestamos = Prestamo::paginate();        

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
        
        $request['tipo_moneda'] = "PEN";
        $request['monto_x_cuota'] = 0;
        $request['numero_operacion'] = 1;
        
        $request['fecha_registro'] = date("Y-m-d H:i:s");
        //$request['fecha_inicio'] = $request
        $request['users_id'] = auth()->id();
        $request['estado_prestamo'] = 1;
        $request['saldo'] = $request['capital_total'];

        request()->validate(Prestamo::$rules);
        
        
        $prestamos = Prestamo::create($request->all());

        $id = Prestamo::latest()->first()->id;


        for ($i=0; $i < count($request['numero']); $i++) { 
            Cuota::create([
                'fecha_limite' => $request['fecha_limite'][$i],
                'monto' => $request['monto'][$i],
                'numero' => $request['numero'][$i],
                'estado' => 1,
                'interes' => $request['interes'][$i],
                'total' => $request['total'][$i],
                'prestamos_id' => $id,
            ]);
        }

        
        
        

        
        
        
        
                

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamo = Prestamo::find($id);

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
        request()->validate(Prestamo::$rules);

        $prestamo->update($request->all());

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo updated successfully');
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
}
