<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Type extends Model
{
    public $timestamps = false;
    protected $table = 'types';
    protected $fillable = [
        'value_name',
        'product_type_id'
    ];

//    public function productTypes(): BelongsTo
//    {
//        return $this->belongsTo(ProductType::class,'product_type_id','id');
//    }
}
