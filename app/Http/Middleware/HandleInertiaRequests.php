<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        $role = '';
        if (auth()->user()) {
            if (auth()->user()->role == \App\Models\User::is_super_admin) {
                $role = \App\Models\User::is_super_admin;
            } elseif (auth()->user()->role == \App\Models\User::is_hospital_admin) {
                $role = \App\Models\User::is_hospital_admin;
            } elseif (auth()->user()->role == \App\Models\User::is_a_doctor) {
                $role = \App\Models\User::is_a_doctor;
            } else {
                $role = '';
            }
        }

        return array_merge(parent::share($request), [
            'ziggy' => function () {
                return (new Ziggy)->toArray();
            },

            'flash' => ['role' => $role],
        ]);
    }
}
