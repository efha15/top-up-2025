<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diamondpackage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'amount', 'price', 'description'];

    public function topupRequests()
    {
        return $this->hasMany(Topuprequest::class, 'package_id');
    }
}
