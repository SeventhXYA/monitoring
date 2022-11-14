<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthlytargetic extends Model
{
    use HasFactory;
    protected $table = 'monthlytargetic';
    protected $fillable = [
        'id', 'user_id', 'target_ic', 'deskripsi_ic'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
