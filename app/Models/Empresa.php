<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombreEmpresa
 * @property $ruc
 * @property $razon_social
 * @property $logo
 * @property $correo
 * @property $celular
 * @property $celular1
 * @property $celular2
 * @property $direccion
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombreEmpresa' => 'required',
		'ruc' => 'required',
		'razon_social' => 'required',
		'logo' => 'required',
		'correo' => 'required',
		'celular' => 'required',
		'celular1' => 'required',
		'celular2' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreEmpresa','ruc','razon_social','logo','correo','celular','celular1','celular2','direccion','telefono'];



}
