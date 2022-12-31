<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\TestAppointment;
use App\Models\ETTAppointment;
use App\Models\TreatmentDrug;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        $totalPatient=Patient::count();
        $totalTestAppointment=TestAppointment::count();
        $totalEttAppointment=ETTAppointment::count();
        $totalTreatmentDrug=TreatmentDrug::count();

        $totalAllUsers=User::count();
        $totalDoctor=User::where('role','doctor')->count();
        $totalAdmin=User::where('role','admin')->count();
        $totalUser=User::where('role','user')->count();
        
        return view('dashboards.admins.index',compact('totalPatient','totalTestAppointment',
                                                    'totalEttAppointment','totalTreatmentDrug',
                                                    'totalAllUsers','totalDoctor','totalAdmin',
                                                    'totalUser'));
    }
}
