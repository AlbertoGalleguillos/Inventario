<?php

namespace App;

class Product extends Model
{
    public function status() {
        return $this->belongsTo(ProductStatus::class);
    }
}
