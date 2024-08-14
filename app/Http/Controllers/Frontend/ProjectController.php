<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();
        $category=Project::select('category')->groupBy('category')->get();
        $data = compact('project','category');
        return view('frontend.project')->with($data);
    }
}
