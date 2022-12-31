<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentDrug extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'Date', 'Drug_CCU_HDU_Stay', 'Dosage', 'Frequency', 'Treatment_On_Discharge'];
}
