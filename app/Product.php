<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'image', 'sub_category_id',
                                        'satuan', 'set_lusin', 'lusin', 'set_grosir',
                                        'grosir', 'trim', 'stok', 'deskripsi',];
}
