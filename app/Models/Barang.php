<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id_category' , 'nama_barang' ,'id_satuan' ,'stock' ,'harga'];


    // objek relatiopn mapping (ORM)

    public function Category(){
        return $this->belongsTo(Category::class, 'id_category' , 'id');
    }
    public function Satuan(){
        return $this->belongsTo(Satuan::class, 'id_satuan' , 'id');
    }
}
