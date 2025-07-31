<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'topup_request_id',
        'user_id',
        'payment_method',
        'status',
        'paid_at'
    ];

    public function topupRequest()
    {
        return $this->belongsTo(Topuprequest::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
