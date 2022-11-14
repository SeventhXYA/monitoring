<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailysd extends Model
{
    use HasFactory;
    protected $table = 'dailysd';
    protected $fillable = [
        'id', 'user_id', 'plan', 'actual', 'progres', 'foto'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
