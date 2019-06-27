<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;

    protected $fillable = ['cep', 'rua', 'numero', 'bairro', 'cidade_id', 'usuario_id' ]; //'enderco_principal'

    public function cities() {
        return $this->belongsTo('App\Models\City');
    }
    public function users() {
        return $this->belongsTo('App\User');
    }
}
