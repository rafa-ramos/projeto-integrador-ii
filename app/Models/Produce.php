<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    public $timestamps = false;

    protected $fillable = ['nome', 'descricao', 'peso'];
}
