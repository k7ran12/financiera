<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $NumDoc
 * @property $Region
 * @property $Provincia
 * @property $Distrito
 * @property $Direccion
 * @property $NumTelefono
 * @property $CorreoElec
 * @property $tipodocumentos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Prestamo[] $prestamos
 * @property Tipodocumento $tipodocumento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'NumDoc' => 'required',
		'Region' => 'required',
		'Provincia' => 'required',
		'Distrito' => 'required',
		'Direccion' => 'required',
		'NumTelefono' => 'required',
		'CorreoElec' => 'required',
		'tipodocumentos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','NumDoc','Region','Provincia','Distrito','Direccion','NumTelefono','CorreoElec','tipodocumentos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prestamos()
    {
        return $this->hasMany('App\Models\Prestamo', 'clientes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipodocumento()
    {
        return $this->hasOne('App\Models\Tipodocumento', 'id', 'tipodocumentos_id');
    }
    

}
