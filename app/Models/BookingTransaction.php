<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingTransaction extends Model
{
    use HasFactory, SoftDeletes;
    // Mass assignment
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'total_amount',
        'is_paid',
        'destination_id',
        'started_at',
        'proof',
        'booking_trx_id',
    ];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
    // public function admin(): BelongsTo
    // {
    //     return $this->belongsTo(Admin::class);
    // }
}
