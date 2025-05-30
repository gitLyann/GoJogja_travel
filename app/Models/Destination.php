<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Destination extends Model
{
    use HasFactory, SoftDeletes;
    // Mass assignment
    protected $fillable = [
        'name',
        'slug', // Unique identifier for the destination
        'thumbnail',
        'path_video',
        'about',
        'address',
        'price',
        'is_popular',
        'category_id',
        'admin_id',
        'closed_time_at',
        'opened_time_at',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
    public function photos(): HasMany
    {
        return $this->hasMany(DestinationPhoto::class);
    }
    // public function bookingTransactions(): HasMany
    // {
    //     return $this->hasMany(BookingTransaction::class);
    // }
}
