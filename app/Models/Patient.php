<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_no',
        'case_no',
        'name',
        'address',
        'dob',
        'age',
        'gender',
        'blood_group',
        'diagnosis',
        'DM',
        'HT',
        'DYSLIPIDAEMIA',
        'CVA_TIA',
        'PVD',
        'BA',
        'DM',
        'RENAL_DISEASE',
        'other',
        'alcohol',
        'smoking',
        'family_hx',
        'allergic_hx',
        'height',
        'weight',
        'bmi',
    ];
}
