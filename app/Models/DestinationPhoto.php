<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DestinationPhoto extends Model
{
    use HasFactory, SoftDeletes;
    // Mass assignment
    protected $fillable = [
        'photo',
        'destination_id',
    ];
}
