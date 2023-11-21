<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \App\Models\ActuatorModel;
use \App\Models\MotionType;

class ActuatorType extends Model
{
    use SoftDeletes;

    protected $table = 'actuator_type';

    public function motion_types()
    {
        return $this->belongsToMany(MotionType::class, 'motion_types_actuator_types', 'motion_type_id', 'actuator_type_id');
    }
    public function actuator_models()
    {
        return $this->belongsToMany(ActuatorModel::class, 'actuator_models_actuator_types', 'actuator_model_id', 'actuator_type_id');
    }

}
