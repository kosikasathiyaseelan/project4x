<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermanentPaceMaker extends Model
{
    use HasFactory;
    protected $table ='permanent_pace_makers';

    protected $fillable =['patient_id','date','cath_no','indication','done_by'];
}
