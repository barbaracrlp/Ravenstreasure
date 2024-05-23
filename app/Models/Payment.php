<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    public function buyer():BelongsTo{
        return $this->belongsTo(Buyer::class,'payment_id');
    }

    public function designer():BelongsTo{
        return $this->belongsTo(Designer::class,'payment_id');
    }
}
