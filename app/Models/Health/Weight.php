<?php

namespace App\Models\Health;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    /** @use HasFactory<\Database\Factories\Health\WeightFactory> */
    use HasFactory;

    protected $fillable = [
        'weight',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
