<?php

namespace App;

class ProductStatus extends Model
{
    public function products() {
        return $this->belongsTo(Product::class);
    }
}
