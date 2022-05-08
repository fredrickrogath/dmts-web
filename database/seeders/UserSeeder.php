<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'patient',
            'role' => '4',
            'email' => 'patient@dmts.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
