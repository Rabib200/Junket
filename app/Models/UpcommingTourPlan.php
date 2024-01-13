<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcommingTourPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name',
        'location',
        'short_description',
        'long_description',
        'image',
        'cost_description',
        'total_cost',
        'booking_cost',
        'capacity'
    ];
}