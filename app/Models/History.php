<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'event_id',
        'category_id',
        'name',
        'birth',
        'gender',
        'phone',
        'quantity'
    ];
    public $timestamps = true;
    protected $table = 'histories';
}
