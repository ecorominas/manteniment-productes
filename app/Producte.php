<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    protected $table = 'productes';

    protected $fillable = ['nom', 'referencia', 'preu', 'actiu'];

    public function getActiu()
    {
        return $this->actiu === 1 ? 'Si' : 'No';
    }
}
