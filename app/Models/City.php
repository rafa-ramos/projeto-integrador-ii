<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    protected $fillable = ['nome', 'state_id'];

    public function states() {
        return $this->belongsTo('App\Models\State');
    }

}
