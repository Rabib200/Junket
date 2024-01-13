<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'tour_id',
        'name',
        'email',
        'phone',
        'street',
        'house',
        'payment',
    ];
    public function tour(){
        return $this->belongsTo(User::class, 'tour_id','id');
    }
}