<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::where('status', 2)->where('user_id', auth()->user()->id)->latest('id')->paginate(3);

        //$user = User::where('id', auth()->user()->id);
        
        return view('admin.index', compact('posts'));
    }
}
