<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unidade
 *
 * @property $idUnidad
 * @property $categoria_id
 * @property $placa
 * @property $marca
 * @property $modelo
 * @property $estilo
 * @property $color
 * @property $traccion
 * @property $combustible
 * @property $ayoFabricacion
 * @property $contratacion
 * @property $valorAdqui
 * @property $valorHacienda
 * @property $estado
 * @property $descripcion
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unidade extends Model
{
      protected $primaryKey = 'idUnidad';
    static $rules = [
		
		'categoria_id' => 'required',
		'placa' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'estilo' => 'required',
		'color' => 'required',
		'traccion' => 'required',
		'combustible' => 'required',
		'ayoFabricacion' => 'required',
		'contratacion' => 'required',
		'valorAdqui' => 'required',
		'valorHacienda' => 'required',
		'estado' => 'required',
		'descripcion' => 'required',
		'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idUnidad','categoria_id','placa','marca','modelo','estilo','color','traccion','combustible','ayoFabricacion','contratacion','valorAdqui','valorHacienda','estado','descripcion','observacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    

}
