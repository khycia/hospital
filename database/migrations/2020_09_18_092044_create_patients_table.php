<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('patient_id');
            $table->integer('patient_type');
            $table->string('name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->integer('contact');
            $table->string('diagnosis');
            $table->integer('healthcare_type');
            $table->integer('doctor_id');
            $table->integer('nurse_id');
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
        Schema::dropIfExists('patients');
    }
}
