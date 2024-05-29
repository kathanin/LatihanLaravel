<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Displays a listing of the resource.
     * 
     * @return View
     */
    public function index(): View
    {
        // Kirim data post ke view
        return view('posts.index');
    }
}
