<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\database\Eloquent\Relations\BelongsTo;

class products_in_cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_status',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(dummy_user::class, 'id_user', 'id');
    }
}
