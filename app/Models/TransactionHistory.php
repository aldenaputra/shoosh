<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid', 'shoeid', 'quantity', 'payment_method', 'image', 'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function shoe()
    {
        return $this->belongsTo(shoe::class, 'id');
    }
}
