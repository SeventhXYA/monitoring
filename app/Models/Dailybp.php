<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailybp extends Model
{
    use HasFactory;
    protected $table = 'dailybp';
    protected $fillable = [
        'id', 'user_id', 'nama', 'plan', 'actual', 'progres', 'foto'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
