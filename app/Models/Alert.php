<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \App\Models\Actuator;

class Alert extends Model
{
    use SoftDeletes;

    protected $table = 'alert';

    public function actuators()
    {
        return $this->belongsTo(Actuator::class,'id');
    }

}
