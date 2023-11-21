<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \App\Models\ActuatorType;

class MotionType extends Model
{
    use SoftDeletes;

    protected $table = 'motion_type';

    public function actuator_types()
    {
        return $this->belongsToMany(ActuatorType::class);
    }
}
