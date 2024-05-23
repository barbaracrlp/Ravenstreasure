<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Designer extends User
{
    use HasFactory;

    protected $fillable = [
        'nameBrand',
    ];

    public function user(){
        return $this->belongsTo(User::class);

    }

    public function payment(){
        return$this->hasOne(Payment::class);
    }

    public function collection():HasMany
    {
        return $this->hasMany(Collection::class);
    }

}
