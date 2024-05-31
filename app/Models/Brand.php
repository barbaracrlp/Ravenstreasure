<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'user_id',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function designs():HasMany{
        return $this->hasMany(Design::class);
    }

    public function collection(): HasMany
    {
        return $this->hasMany(Collection::class);
    }
}
