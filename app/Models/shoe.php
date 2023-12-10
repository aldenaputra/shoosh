<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Symfony\Component\String\b;

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
        return $this->belongsTo(brand::class);
    }

    public function reviews() {
        return $this->hasMany(review::class);
    }
}
