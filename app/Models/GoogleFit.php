<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleFit extends Model
{
    use HasFactory;

    protected $fillable = [
        'numericValue',
        'data_type',
        'unit',
        'date_from',
        'date_to',
        'user_id'
    ];
}
