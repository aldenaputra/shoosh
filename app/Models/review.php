<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $fillable = [
        'shoes_id',
        'nickname',
        'title',
        'description',
        'quality',
        'value',
        'price'
    ];

    public function shoes()
    {
        return $this->belongsTo(shoe::class);
    }
}
