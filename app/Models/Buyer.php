<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Buyer extends User
{
    use HasFactory;

    //de momento solo una
    protected $fillable = [
        'address',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);

    }

    public function payment():HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function cart():HasMany
    {
        return $this->hasMany(Cart::class);
    }





}
