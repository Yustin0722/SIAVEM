<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tlicencia
 *
 * @property $idTL
 * @property $nombreTL
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tlicencia extends Model
{
  protected $primaryKey = 'idTL';   
    static $rules = [
		
		'nombreTL' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreTL'];


   public function licencia()
    {
        return $this->hasMany('App\Models\Licencia', 'idTL', 'idLicencia');
    }

}
