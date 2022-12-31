<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pace_makers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->enum('type',['VVIR','DDDR']);
            $table->date('date');
            $table->string('sensing_and_pacing');
            $table->double('sensed');
            $table->double('paced');
            $table->double('amplitude');
            $table->double('atrial_pacing');
            $table->double('ventricular_pacing');
            $table->double('measured_current');
            $table->double('measured_impedance');
            $table->double('longevity_minimum');
            $table->double('longevity_maximum');
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pace_makers');
    }
};
