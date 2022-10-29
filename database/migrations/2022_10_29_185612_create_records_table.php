<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            
            $table->id();
            $table->string('location', 60);
            $table->integer('pressure');
            $table->integer('heart_rate');
            $table->integer('oxygen');
            $table->integer('device_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('records');
    }
};
