<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;

class Design extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'stock',
        'expiration',
        'price',
        'collection_id',
        'user_id',
        'category_id',
        'type_id',
        'file_path',
    ];

    //a partir de aqui creo las relaciones

    public function designer():BelongsTo{
        return $this->belongsTo(Brand::class);
    }

    //falta el modelo
    public function type():HasOne{
        return $this->hasOne(Type::class);
    }

    public function collection():BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,);
    }


    public function getFullFilePathAttribute()
    {
        // Obtener el file_path almacenado en la base de datos
        $filePath = $this->attributes['file_path'];

        // Concatenar el prefijo /storage/app/public
        return Storage::url($filePath);
    }




}
