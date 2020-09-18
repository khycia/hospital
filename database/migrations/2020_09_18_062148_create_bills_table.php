<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('receipt_number');
            $table->foreignId('patient_id');
            $table->foreignId('doctor_id');
            $table->foreignId('nurse_id');
            $table->foreignId('healthcare_type')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('room_charge')->nullable();
            $table->integer('no_of_days')->nullable();
            $table->integer('lab_charge')->nullable();
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
        Schema::dropIfExists('bills');
    }
}
