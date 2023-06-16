<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwapTrashItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'swap_trash_id',
        'trash_id',
    ];

    public function swaptrash()
    {
        return $this->belongsTo(SwapTrash::class);
    }

    public function trash()
    {
        return $this->belongsTo(Trash::class);
    }
}
