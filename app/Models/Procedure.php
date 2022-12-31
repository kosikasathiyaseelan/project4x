<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $table ='procedures';

    protected $fillable =[
        'patient_id',
        'side',
        'access',

        'leads',
        'procedure_type',
        'position',

        'generator_position',
        'pacemaker',
        'type',
        'mode',
        'generator',
        'AtrialLead',
        'RVLead',
        'LVLead',

        'parameter_leads',
        'threshold',
        'current',
        'P_R_wave'
    ];

}
