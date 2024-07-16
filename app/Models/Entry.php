<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'type',
        'amount',
        'entry_date',
        'description',
        'file'
    ];
}

