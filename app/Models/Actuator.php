<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Alert;

class Actuator extends Model
{
    protected $table = 'actuator';

    public function alerts()
    {
        return $this->hasMany(Alert::class,'id');
    }

}
