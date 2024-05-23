<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;


    protected $fillable = ['name'];

    public function design():HasMany
    {
        return $this->hasMany(Design::class, 'category_design');
    }
}
