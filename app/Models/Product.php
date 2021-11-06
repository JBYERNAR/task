<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'sku',
        'name',
        'price',
        'product_type_id'
    ];

    public function characters(): HasMany
    {
        return $this->hasMany(Character::class, 'product_id', 'id');
    }

    public function productTypes(): BelongsTo
    {
        return $this->belongsTo(Character::class, 'product_type_id', 'id');
    }
}
