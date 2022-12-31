<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardioThoracicClinic extends Model
{
    use HasFactory;
    protected $table = 'cardio_thoracic_clinics';
    
    protected $fillable = ['patient_id','date','time','done_by'];
}
