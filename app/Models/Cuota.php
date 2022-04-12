<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuota
 *
 * @property $id
 * @property $fecha_limite
 * @property $monto
 * @property $numero
 * @property $estado
 * @property $created_at
 * @property $updated_at
 * @property $prestamos_id
 *
 * @property Prestamo $prestamo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cuota extends Model
{
    
    static $rules = [
		'fecha_limite' => 'required',
		'monto' => 'required',
		'numero' => 'required',
		'estado' => 'required',
		'prestamos_id' => 'required',
    'interes' => 'required',
    'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_limite','monto','numero','estado','prestamos_id','interes','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prestamo()
    {
        return $this->hasOne('App\Models\Prestamo', 'id', 'prestamos_id');
    }
    

}
