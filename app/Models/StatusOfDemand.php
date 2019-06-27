<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusOfDemand extends Model
{
    public $timestamps = false;

    protected $fillable = ['descricao'];
}
