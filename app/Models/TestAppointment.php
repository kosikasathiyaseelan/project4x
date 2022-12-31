<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestAppointment extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id','Special_Investication' ,'Date', 'Time'];
}
