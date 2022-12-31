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
        Schema::create('treatment_drugs', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('patient_id');
            
            $table->date('Date');
            $table->enum('Drug_CCU_HDU_Stay', ['Aspirin_EntericCoatedAspirin', 'Clopidogrel','Atorvastatin','captopril/Enalapril/Losartan','Diltiazem/Amlodipine/Verapamil','HCT','Frusemide','Spiranolactone','KCL','Warfarin','Digoxin','O_Penicillin','Amiodarone','Metformin','Gliclazide/Tolbut','Mixtard_Insulin_sc','Thyroxine','Omeprazole']);
            $table->double('Dosage');
            $table->enum('Frequency',['nocte','daily','mane']);
            $table->string('Treatment_On_Discharge');
           
           
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
        Schema::dropIfExists('treatment_drugs');
    }
};
