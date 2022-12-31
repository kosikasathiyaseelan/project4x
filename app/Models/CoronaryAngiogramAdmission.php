<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoronaryAngiogramAdmission extends Model
{
    use HasFactory;
    protected $table = 'coronary_angiogram_admissions';
    protected $fillable = ['patient_id','testing_date','appointment_date','appointment_time','appointment_ward'];
}
