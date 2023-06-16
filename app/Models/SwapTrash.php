<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwapTrash extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token',
        'date',
        'total_weight',
        'total_money',
        'status_swap',
        'status',
        'choose_ticket_money',
        'no_rekening',
        'bank_name',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function swaptrashitems()
    {
        return $this->hasMany(SwapTrashItem::class);
    }
}
