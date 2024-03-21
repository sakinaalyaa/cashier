<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $fillable = ['nama_menu', 'harga', 'image', 'deskripsi', 'jenis_id'];

    public function jenis()
    {
        return $this->belongsTo(jenis::class, 'jenis_id'); 
    }
}
