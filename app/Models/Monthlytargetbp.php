<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthlytargetbp extends Model
{
    use HasFactory;
    protected $table = 'monthlytargetbp';
    protected $fillable = [
        'id', 'user_id', 'target_bp', 'deskripsi_bp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
