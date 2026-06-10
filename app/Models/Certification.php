<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'issuer'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
