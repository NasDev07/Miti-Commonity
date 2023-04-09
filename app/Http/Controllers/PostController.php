<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Pemakaian;
use App\Models\Produk;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $pakai = Pemakaian::latest()->take(5)->get();
        $dataList = Post::latest()->take(3)->get();
        $dataProduk = Produk::latest()->take(3)->get();
        return view('home.Blog', compact('pakai', 'dataList', 'dataProduk'));
    }

    // public function show($name)
    // {
    //     try {
    //         $post = Post::where('name', $name)->firstOrFail();
    //         return view('home.SingleBlog', compact('post'));
    //     } catch (Exception $e) {
    //         return view('home.notfound');
    //     }
    // }


    public function show($id)
    {
        try {
            $post = Post::findOrFail($id);
            return view('home.SigleBlog', compact('post'));
        } catch (Exception $e) {
            return view('home.notfound');
        }
    }

    public function blogpost()
    {
        $menuBlog = 'active';
        $dataitem = Post::latest()->paginate(3);
        return view('home.home-blog', compact('dataitem', 'menuBlog'));
    }
}