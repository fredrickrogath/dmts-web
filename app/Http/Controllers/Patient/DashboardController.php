<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;

class DashboardController extends Controller
{
    //
    public function index()
    {
        //
        $this->authorize('patientView', \App\Models\User::class);

        return Inertia::render('Patient/Dashboard');
    }
}
