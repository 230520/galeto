<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_album', 'deskripsi', 'tanggal_dibuat', 'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }
}