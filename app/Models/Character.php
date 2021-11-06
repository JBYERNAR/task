<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Character extends Model
{
    protected $with = ['types'];
    public $timestamps = false;
    protected $table = 'characters';
    protected $fillable = [
        'value',
        'type_id',
        'product_id',
    ];

    public function types(): BelongsTo
    {
        return $this->belongsTo(Type::class,'type_id','id');
    }
}
