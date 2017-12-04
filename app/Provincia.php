<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = "provincias";

    protected $fillable = ['nombre'];

    /**
     * Get las Pacs de esa provincia.
     */
    public function matrizPacs()
    {
        return $this->hasMany('App\MatrizPac');
    }
}
