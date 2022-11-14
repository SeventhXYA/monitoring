<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthlytargetkl extends Model
{
    use HasFactory;
    protected $table = 'monthlytargetkl';
    protected $fillable = [
        'id', 'user_id', 'target_kl', 'deskripsi_kl'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
