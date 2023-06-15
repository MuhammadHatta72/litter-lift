<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Trash
 *
 * @property int $id
 * @property int $user_id
 * @property string $date
 * @property int $weight
 * @property string $proof_of_weight
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\TrashFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Trash newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trash newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trash query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trash whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trash whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trash whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trash whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trash whereProofOfWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trash whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trash whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trash whereWeight($value)
 */
class Trash extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
