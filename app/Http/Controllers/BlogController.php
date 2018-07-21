<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function listPost ($category)
    {
        return view('blog', ['category' => $category, 'post' => 'tous les posts de la catégorie']);
    }

    public function zoomPost($category, $idPost)
    {
        return view('blog', ['category' => $category, 'post' => $idPost]);
    }
}
