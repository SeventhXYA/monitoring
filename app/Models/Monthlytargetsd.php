<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthlytargetsd extends Model
{
    use HasFactory;
    protected $table = 'monthlytargetsd';
    protected $fillable = [
        'id', 'user_id', 'target_sd', 'deskripsi_sd'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
