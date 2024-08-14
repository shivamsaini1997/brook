<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectdetailController extends Controller
{
    public function index($slug){
        $project = Project::where('slug',$slug)->first();
        $data = compact('project');
        // dd($project);
        return view('frontend.project-details')->with($data);
    }
}
