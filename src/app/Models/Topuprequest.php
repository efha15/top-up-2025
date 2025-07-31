<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topuprequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'status',
        'requested_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function diamondPackage()
    {
        return $this->belongsTo(Diamondpackage::class, 'package_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
