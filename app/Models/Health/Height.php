<?php

namespace App\Models\Health;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Height extends Model
{
    /** @use HasFactory<\Database\Factories\Health\HeightFactory> */
    use HasFactory;

    protected $fillable = [
        'height',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
