<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminSuperView', \App\Models\User::class);

        return inertia('SuperAdmin/Dashboard', ['selectedTabInertia' => 'dmts-monitoring']);
    }

    public function management()
    {
        $this->authorize('adminSuperView', \App\Models\User::class);

        return inertia('SuperAdmin/Dashboard', ['selectedTabInertia' => 'general-management']);
    }

    // add hospital administrators
    public function addHospitalAdministrator(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'DOB' => 'required|datae',
            'role' => 'required',
            'DOB' => 'required',
        ]);

        $user = \App\Models\User::create([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
            'DOB' => $request->DOB,
            'password' => Hash::make($request->email),
        ]);

        return response()->json(['added' => true]);
    }

    // add hospital doctor
    public function addDoctor(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'DOB' => 'required|datae',
            'role' => 'required',
            'DOB' => 'required',
        ]);

        $user = \App\Models\User::create([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
            'DOB' => $request->DOB,
            'password' => Hash::make($request->email),
        ]);

        return response()->json(['added' => true]);
    }


    // add hospital patient
    public function addPatient(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'DOB' => 'required|datae',
            'role' => 'required',
            'DOB' => 'required',
        ]);

        $user = \App\Models\User::create([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
            'DOB' => $request->DOB,
            'password' => Hash::make($request->email),
        ]);

        return response()->json(['added' => true]);
    }

    // edit hospital administrator
    public function editHospitalAdministrator(Request $request)
    {
        $user = \App\Models\User::findOrFail($request->id);

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
            'DOB' => $request->DOB,
        ]);

        return response()->json(['edited' => true]);
    }


    // edit hospital patient
    public function editPatient(Request $request)
    {
        $user = \App\Models\User::findOrFail($request->id);

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
            'DOB' => $request->DOB,
        ]);

        return response()->json(['edited' => true]);
    }


    // edit hospital doctor
    public function editDoctor(Request $request)
    {
        $user = \App\Models\User::findOrFail($request->id);

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
            'DOB' => $request->DOB,
        ]);

        return response()->json(['edited' => true]);
    }


    // delete hospital administrator
    public function deleteHospitalAdministrator(Request $request)
    {
        $user = \App\Models\User::findOrFail($request->id);

        $user->delete();

        return response()->json(['deleted' => true]);
    }


    // delete hospital doctor
    public function deleteDoctor(Request $request)
    {
        $user = \App\Models\User::findOrFail($request->id);

        $user->delete();

        return response()->json(['deleted' => true]);
    }


    // delete hospital patient
    public function deletePatient(Request $request)
    {
        $user = \App\Models\User::findOrFail($request->id);

        $user->delete();

        return response()->json(['deleted' => true]);
    }


    // hospital administrators
    public function hospitalAdministrators(Request $request)
    {
        $hospitalAdmins = \App\Models\User::where('role', \App\Models\User::is_hospital_admin)->latest()->get();
        return response()->json($hospitalAdmins);
    }


    // hospital doctors
    public function hospitalDoctors(Request $request)
    {
        $doctors = \App\Models\User::where('role', \App\Models\User::is_a_doctor)->latest()->get();
        return response()->json($doctors);
    }


    // hospital patients
    public function hospitalPatients(Request $request)
    {
        $doctors = \App\Models\User::where('role', \App\Models\User::is_a_patient)->latest()->get();
        return response()->json($doctors);
    }
    
    // Search for hospital administrators
    public function searchHospitalAdministrators(Request $request)
    {
        $data = cache()->remember('test', 60 * 60 * 24, function () {
            return \App\Models\User::where('name', 'LIKE', '%' . $request->keyword . '%')->orWhere('email', 'LIKE', '%' . $request->keyword . '%')->orWhere('email', 'LIKE', '%' . $request->keyword . '%')->get();
        });
        return response()->json($data);
    }

    // public function searchHospitalAdministrators(Request $request)
    // {
    //     $data = cache()->remember('test', 60 * 60 * 24, function () {
    //         return \App\Models\User::where('name', 'LIKE', '%' . $request->keyword . '%')->orWhere('email', 'LIKE', '%' . $request->keyword . '%')->orWhere('email', 'LIKE', '%' . $request->keyword . '%')->get();
    //     });
    //     return response()->json($data);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
