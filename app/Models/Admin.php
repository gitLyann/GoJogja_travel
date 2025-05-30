<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Admin extends Model
{
    use HasFactory, SoftDeletes;
    // Mass assignment
    protected $fillable = [
        'name',
        'telephone',
        'location',
        'slug',
        'photo',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function destinations(): HasMany
    {
        return $this->hasMany(Destination::class);
    }
    // public function bookingTransactions(): HasMany
    // {
    //     return $this->hasMany(BookingTransaction::class);
    // }
}
