<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

        // $hospitalAdmins = cache()->remember('hospitalAdmin', 60 * 60 * 24, function () {
        //     return \App\Models\User::where('role', \App\Models\User::is_super_admin)->get();
        // });

        // cache()->forget('hospitalAdmin');

        // dd($hospitalAdmins);

        // $hospitalAdmins = \App\Models\User::where('role', \App\Models\User::is_super_admin)->get();

        return inertia('SuperAdmin/Dashboard', ['selectedTabInertia' => 'dmts-monitoring']);
    }

    public function management()
    {
        $this->authorize('adminSuperView', \App\Models\User::class);

        // $hospitalAdmins = cache()->remember('hospitalAdmins', 60 * 60 * 24, function () {
        //     return \App\Models\User::where('id', \App\Models\User::is_super_admin)->get();
        // });

        // $hospitalAdmins = \App\Models\User::where('role', \App\Models\User::is_super_admin)->get();

        return inertia('SuperAdmin/Dashboard', ['selectedTabInertia' => 'general-management']);
    }

    // hospital administrators
    public function hospitalAdministrators(Request $request)
    {
        $hospitalAdmins = \App\Models\User::where('role', \App\Models\User::is_super_admin)->get();
        return response()->json($hospitalAdmins);
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
