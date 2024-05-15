<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $posts = Post::paginate(4);

        if ($request->ajax() && $request->header('X-Requested-With') === 'XMLHttpRequest') {
            $html = '';
            foreach ($posts as $post) {
                $html .= '<div class="mt-5  col-lg-3 border border-2"><h1>' . $post->title . '</h1><p>' . $post->body . '</p></div>';
            }
            return $html;
        }

        return view('welcome');
    }
}
