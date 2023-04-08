<?php

namespace App\Models;

use App\Models\CategoryProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    protected $with = ['author', 'categori'];

    public function categori()
    {
        return $this->belongsTo(CategoryProduk::class, 'category_produk_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}