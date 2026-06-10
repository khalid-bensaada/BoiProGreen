<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrivateLabelProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'name',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function stages()
    {
        return $this->hasMany(ProductionStage::class);
    }
}
