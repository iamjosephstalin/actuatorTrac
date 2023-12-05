<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('api_key')->comment('api key');
            $table->boolean('status')->default('1')->comment('status');
            $table->boolean('products')->default('1')->comment('products');
            $table->boolean('orders')->default('1')->comment('orders');
            $table->boolean('files')->default('1')->comment('files');
            $table->boolean('clients')->default('1')->comment('clients');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_keys');
    }
}