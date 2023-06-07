<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'category',
        'quantity',
        'price'
    ];

    protected $table = 'categories';
}
