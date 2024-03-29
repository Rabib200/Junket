<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'tour_type',
        'user_id',
        'tour_id',
        'comment',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}