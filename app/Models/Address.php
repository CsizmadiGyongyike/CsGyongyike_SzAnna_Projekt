<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    // Ezeket a mezőket engedélyezni kell a mentéshez
    protected $fillable = [
        'user_id',
        'type',
        'tax_number',
        'postcode',
        'city',
        'address',
        'alias'
    ];

    /**
     * Kapcsolat a felhasználóval (fordított irány)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Kapcsolat a rendelésekkel
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}