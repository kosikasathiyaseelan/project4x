<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaceMaker extends Model
{
    use HasFactory;
    protected $table ='pace_makers';

    protected $fillable = [
        'patient_id',
        'type',
        'date',
        'sensing_and_pacing',
        'sensed',
        'paced',
        'amplitude',
        'atrial_pacing',
        'ventricular_pacing',
        'measured_current',
        'measured_impedance',
        'longevity_minimum',
        'longevity_maximum'
    ];
}
