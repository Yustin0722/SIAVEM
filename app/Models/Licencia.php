<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Licencia
 *
 * @property $idLicencia
 * @property $TL_id
 * @property $FechaVencimiento
 * @property $FotoLicencia
 * @property $created_at
 * @property $updated_at
 *
 * @property Tlicencia $tlicencia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Licencia extends Model
{
  protected $primaryKey = 'idLicencia';
    static $rules = [
	
		'TL_id' => 'required',
		'FechaVencimiento' => 'required',
		'FotoLicencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idLicencia','TL_id','FechaVencimiento','FotoLicencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tlicencia()
    {
        return $this->hasOne('App\Models\Tlicencia', 'idTL', 'TL_id');
    }
    

}
