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
        Schema::create('investigations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('ECG');
            $table->string('Troponin_IT');
            $table->boolean('LET')->default('0');
            $table->boolean('SGOT')->default('0');
            $table->boolean('SGPT')->default('0');
            $table->boolean('T_PRO')->default('0');
            $table->boolean('T_Billrubin')->default('0');
            $table->boolean('Alb')->default('0');
            $table->boolean('Glo')->default('0');
            $table->boolean('Alp')->default('0');
            $table->string('CXR');
            $table->string('UFR');
            $table->string('FBC');
            $table->string('FBS');
            $table->string('S_Cr');
            $table->string('BU');
            $table->string('SE');
            $table->enum('lipid_profile', ['Normal', 'Upnormal']);
            $table->double('T_Cholestreol');
            $table->double('LDL');
            $table->double('HDL');
            $table->double('TG');
            $table->integer('ESR');
            $table->double('CRP');
            $table->string('OTHER_Investigation');
            
            $table->string('Referrals');
            
            $table->string('Plan_on_discharge');
            $table->date('Next_appointment');
            $table->integer('lx_to_be_done');
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
        Schema::dropIfExists('investigations');
    }
};
