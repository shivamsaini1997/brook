<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Feature;
use App\Models\Project;
use App\Models\Serviceoffer;
use App\Models\Testimonial;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $banner = Banner::where('status',1)->get();
        $feature = Feature::where('status',1)->get();
        $serviceoffer = Serviceoffer::where('status',1)->get();
        $testimonial = Testimonial::where('status',1)->get();
        $about =  About::first();
        $blog = Blog::where('status',1)->orderBy('created_at', 'desc')->limit(3)->get();
        $data = compact('blog', 'about','banner', 'feature','serviceoffer','testimonial');
        // echo "<pre>";
        // print_r($serviceoffer->toArray());
        return view('frontend.index')->with($data);
    }
}
