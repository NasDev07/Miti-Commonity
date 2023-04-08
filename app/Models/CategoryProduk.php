<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryProduk extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'slug'
    ];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}