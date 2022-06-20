<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function googleFitData(Request $request)
    {
        //     Log::info($i);

        for($i = 0 ;  $i < count($request->all()); $i++){
            \App\Models\GoogleFit::firstOrCreate([
                'numericValue' => $request[$i]['value']['numericValue'], 
                'data_type' => $request[$i]['data_type'], 
                'unit' => $request[$i]['unit'],
                'date_from' => $request[$i]['date_from'],
                'date_to' => $request[$i]['date_to'],
                'user_id' => Auth::user()->id
            ]);
        }

        return response()->json(['status' => 'success']);
    }
}
