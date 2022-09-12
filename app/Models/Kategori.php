<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;


class Kategori extends Model
{
    use HasFactory;

    // ini ditambhakan jika nama table tidak jamak
    protected $table = 'kategori'; 

    // ini jika
    protected $guarded = [];

    public function barang(){
        return $this->belongToMany(barang::class);
    }
}
