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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('clinic_no');
            $table->string('case_no');
            $table->string('name');
            $table->string('address');
            $table->date('dob');
            $table->integer('age');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->string('diagnosis');
            $table->boolean('DM')->default('0');
            $table->boolean('HT')->default('0');
            $table->boolean('DYSLIPIDAEMIA')->default('0');
            $table->boolean('CVA_TIA')->default('0');
            $table->boolean('PVD')->default('0');
            $table->boolean('BA')->default('0');
            $table->boolean('RENAL_DISEASE')->default('0');
            $table->string('other')->nullable();
            $table->boolean('alcohol')->default('0');
            $table->boolean('smoking')->default('0');
            $table->boolean('family_hx')->default('0');
            $table->boolean('allergic_hx')->default('0');
            $table->double('height');
            $table->double('weight');
            $table->double('bmi');
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
};
