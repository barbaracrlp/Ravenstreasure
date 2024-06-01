<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=[
        'buyer_id',
        'totalPrice',
    ];

    public function itemcarts():HasMany
    {
        return $this->hasMany(CartItem::class);
    }


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
