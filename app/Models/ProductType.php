<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductType extends Model
{
    public $timestamps = false;
    protected $table = 'product_types';
    protected $fillable = [
        'type_name'
    ];

    public function products(): HasMany{
        return $this->hasMany(Product::class);
    }
}
