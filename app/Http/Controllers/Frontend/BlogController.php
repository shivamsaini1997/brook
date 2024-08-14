<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search', '');

        if (!empty($search)) {
            $blog = Blog::where('title', 'LIKE', "%$search%")->paginate(4);
        } else {
            $blog = Blog::where('status', 1)->orderBy('created_at', 'desc')->paginate(4);
        }
        $data = compact('blog');
        return view('frontend.blog')->with($data);
    }
    public function blogDetails($slug){
        $blog = Blog::where('slug',$slug)->first();
        $data = compact('blog');
        return view('frontend.blog-details')->with($data);
    }
}
