<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'designer_id',
        'price',
    ];

    public function design():HasMany
    {
        return $this->hasMany(Design::class);
    }

    public function designer():BelongsTo{
        return $this->belongsTo(Designer::class);
    }

    // public function setDesignerIdAttribute()
    // {
    //     $this->attributes['designer_id'] = Auth::id();
    // }
}
