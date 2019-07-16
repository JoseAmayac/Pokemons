<?php

namespace Trainers;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
	protected $fillable = ['name','avatar','descripcion'];
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function pokemons()
    {
    	return $this->hasMany('Trainers\Pokemon');
    }
}
