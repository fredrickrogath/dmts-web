<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_patients_id')->constrained('doctor_patients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('blood_glucose');
            $table->string('blood_pressure');
            $table->string('temperature')->nullable();
            $table->string('meal');
            $table->string('exercise')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('patient_requests');
    }
}
