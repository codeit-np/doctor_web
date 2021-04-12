<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('telephone')->nullable();
            $table->string('country')->nullable();
            $table->string('zone')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('ward')->nullable();
            $table->string('province')->nullable();
            $table->decimal('lat')->nullable();
            $table->decimal('lon')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('hospitals');
    }
}
