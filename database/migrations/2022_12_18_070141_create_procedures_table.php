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
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->enum('side',['Left','Right']);
            $table->enum('access',['SCV Puncture','CV cut down','Epicardial']);
            //procedure
            $table->enum('leads',['Atrial','RV','LV']);
            $table->enum('procedure_type',['Active fix','Passive','other']);
            $table->string('position');
            //pacemaker/ICD details
            $table->enum('generator_position',['Pre-Pectoral','Sub-Pectoral','Abdominal']);
            $table->enum('pacemaker',['New','Re-implant']);
            $table->string('type');
            $table->string('mode');
            $table->string('generator');
            $table->string('AtrialLead');
            $table->string('RVLead');
            $table->string('LVLead');
            //implantation parameters
            $table->enum('parameter_leads',['Atrial','RV','LV']);
            $table->double('threshold');
            $table->double('current');
            $table->double('P_R_wave');

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
        Schema::dropIfExists('procedures');
    }
};
