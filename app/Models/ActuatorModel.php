<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \App\Models\ActuatorType;

class ActuatorModel extends Model
{
    use SoftDeletes;

    protected $table = 'actuator_model';

    public function actuator_types()
    {
        return $this->belongsToMany(ActuatorType::class);
    }

}
