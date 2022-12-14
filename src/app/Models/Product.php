<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'model',
        'description',
        'measure',
        'quantity',
        'price',
        'delivery_term',
        'conditions',
        'inquiry_id',
        'user_id',
        'filled'
    ];


    public function measure(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Measure::class, 'measure', 'name');
    }

}
