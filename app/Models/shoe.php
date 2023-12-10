<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoe extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'name',
        'size_EU',
        'type',
        'shoe_category',
        'stock',
        'price',
        'image'
    ];

    public function brands() {
        return $this->belongsTo(Brand::class);
    }

    public function th()
    {
        return $this->belongsToMany(TransactionHistory::class, 'transaction_histories', 'shoeid', 'id');
    }
}
