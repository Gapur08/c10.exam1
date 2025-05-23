<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function restaurant():BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }
    //
}
