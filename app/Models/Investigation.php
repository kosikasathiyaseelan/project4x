<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'ECG',
        'Troponin_IT',
        'LET',
        'SGOT',
        'SGPT',
        'T_PRO',
        'T_Billrubin',
        'Alb',
        'Glo',
        'Alp',
        'CXR',
        'UFR',
        'FBC',
        'FBS',
        'S_Cr',
        'BU',
        'SE',
        'lipid profile',
        'T_Cholestreol',
        'LDL',
        'HDL',
        'TG',
        'ESR',
        'CRP',
        'OTHER_Investigation',
        'Referrals',
        'Plan_on_discharge',
        'Next_appointment',
        'lx_to_be_done',
    ];
}
