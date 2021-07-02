<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $guarded = ['id'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    
    public function skp()
    {
        return $this->hasMany(Skp::class, 'pegawai_id');
    }
    
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'pegawai_id');
    }
    
    public function penilai()
    {
        return $this->hasMany(Nilai::class, 'pejabat_penilai');
    }
}
