<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileMerchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_perusahaan',
        'alamat',
        'kontak',
        'jenis_makanan',
        'deskripsi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
