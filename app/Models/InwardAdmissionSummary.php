<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InwardAdmissionSummary extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'DOA', 'DOD', 'BHT_NO', 'case_no', 'Reason_For_Admission', 'Acute_Problem','Pulse', 'BP','Special_Treatment','Treatment_on_Discharge'];
}

