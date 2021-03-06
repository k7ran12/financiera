<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $monto
 * @property $interes
 * @property $num_cuota
 * @property $tipo_moneda
 * @property $fecha_registro
 * @property $fecha_inicio
 * @property $monto_x_cuota
 * @property $total_interes
 * @property $monto_total
 * @property $clausula
 * @property $estado_prestamo
 * @property $numero_operacion
 * @property $created_at
 * @property $updated_at
 * @property $clientes_id
 * @property $users_id
 *
 * @property Cliente $cliente
 * @property Cuota[] $cuotas
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'capital' => 'required',
		'tea' => 'required',
		'num_cuota' => 'required',
		'tipo_moneda' => 'required',
		'fecha_registro' => 'required',
		'fecha_inicio' => 'required',
		'monto_x_cuota' => 'required',
		'total_interes' => 'required',
		'capital_total' => 'required',		
		'estado_prestamo' => 'required',
		'numero_operacion' => 'required',
		'clientes_id' => 'required',
		'users_id' => 'required',
        'form_pago' => 'required',
        'saldo' => 'required'
    ];    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['capital','tea','num_cuota','tipo_moneda','saldo','fecha_registro','fecha_inicio','monto_x_cuota','form_pago','total_interes','capital_total','clausula','estado_prestamo','numero_operacion','totalPagoPMO','clientes_id','users_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'clientes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuotas()
    {
        return $this->hasMany('App\Models\Cuota', 'prestamos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    

}
