<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActuatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuator', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motion_type');
            $table->string('actuator_type');
            $table->string('actuator_model');
            $table->string('actuator_mfg');
            $table->string('customer');
            $table->string('int_order_no');
            $table->string('serial_no');
            $table->date('mfg_date');
            $table->date('warranty_exp_date');
            $table->string('catelogue')->nullable();
            $table->string('iom')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actuator');
    }
}
