<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicVisit extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'date', 'complaint', 'PR', 'PR_nature', 'BP', 'investigation'];
}
