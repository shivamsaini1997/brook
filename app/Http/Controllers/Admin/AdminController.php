<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Feature;
use App\Models\Project;
use App\Models\Register;
use App\Models\Serviceoffer;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
    public function adminlogin(){
        return view('backend.login');
    }
    public function adminRegister(){

        $register = new Register;
        $data = compact('register');
        return view('backend.register');
    }
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // $credentials = $request->only('email', 'password');
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::attempt($credentials)) {
                return redirect()->intended('/admin/dashboard')->with('success', 'You have successfully logged in.');
        }
        return redirect("/admin")->with('error', 'Oops! You have entered invalid credentials.');

    }
    public function registerStore(Request $request){
        $request->validate([
            'full_name'=> 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password-confir' => 'required|same:password',
        ]);
        try {
            $register = new Register;
            $register->full_name = $request['full_name'];
            $register->email = $request['email'];
            $register->password = Hash::make($request['password']);
            $register->save();
            return redirect('/admin')->with('success', 'You have successfully register.');
        } catch (\Exception $e) {
            // Handle errors and redirect back with an error message
            return redirect('/admin/register')->with('error', 'Registration failed. Please try again.');
        }
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin')->with('success', 'You have successfully logged out.');
    }
    public function dashboard(){
        return view('backend.Dashboard.dashboard');
    }
    public function addBanner(){
        $url = url('/admin/add-banner');
        $banner = new Banner;

        $data = compact('banner','url');
        return view('backend.Home.banner.add-banner')->with($data);
    }
    public function store(Request $request){
        $banner = new Banner;
        $banner->sub_heading = $request['sub_heading'];
        $banner->main_heading = $request['main_heading'];
        $banner->main_heading2 = $request['main_heading2'];
        $banner->description = $request['description'];
        $banner->status = $request['status'];
        $banner->save();
        return redirect()->back();
    }
    public function managebanner(){
        $banner = Banner::all();
        $data = compact('banner');
        return view('backend.Home.banner.manage-banner')->with($data);;
    }
    public function editbanner($id){
        $banner = Banner::find($id);
        if(is_null($banner)){
            return view('bankend.Home.banner.manage-banner');
        }else{
            $url = url('/admin/manage-banner/update/'). "/" . $id;
            $data = compact('banner','url');
            return view('backend.Home.banner.add-banner')->with($data);
        }

    }
    public function deletebanner($id){
        $banner = Banner::find($id);
        if(!is_null($banner)){
            $banner->delete();
        }
        return redirect('/admin/manage-banner');

    }
    public function updatebanner($id, Request $request){
        $banner = Banner::find($id);
        $banner->sub_heading = $request['sub_heading'];
        $banner->main_heading = $request['main_heading'];
        $banner->main_heading2 = $request['main_heading2'];
        $banner->description = $request['description'];
        $banner->status = $request['status'];
        $banner->save();
        return redirect('/admin/manage-banner');
    }
    public function banner_status($id,$status){
        $banner = Banner::find($id);
        $banner->status=$status;
        $banner->save();
        return back()->with('success','Status update success!');
    }


    public function addfeature(){
        $url = url('/admin/add-feature');
        $feature = new Feature;
        $data = compact('feature', 'url');
        return view('backend.Home.feature.add-feature')->with($data);
    }

    public function storefeature(Request $request)
    {
        // Get the submission count from the session
        $featureCount = Feature::count();

        // Check if the submission count is less than 4
        if ($featureCount  < 4) {
            $feature = new Feature();
            $feature->main_heading = $request['main_heading'];
            $feature->sub_heading = $request['sub_heading'];
            $feature->status = $request['status'];

            if ($request->hasFile('image')) {
                $feature->image = $request->file('image')->store('public/upload');
            }

            $feature->save();

            return redirect()->back()->with('success', 'Feature added successfully.');
        } else {
            return redirect()->back()->with('error', 'You have already submitted the form 4 times.');
        }
    }
    public function managefeature(){
        $feature = Feature::all();
        $data = compact('feature');
        return view('backend.Home.feature.manage-feature')->with($data);
    }

    public function editfeature($id){
        $feature = Feature::find($id);
        if(is_null($feature)){
            return view('backend.Home.feature.manage-feature');

        }else{
            $url = url('/admin/manage-feature/update/'). "/" . $id;
            $data = compact('feature','url');
            return view('backend.Home.feature.add-feature')->with($data);
        }
    }
    public function updatefeature($id, Request $request){
        $feature = Feature::find($id);
        $feature->main_heading = $request['main_heading'];
        $feature->sub_heading = $request['sub_heading'];
        $feature->status = $request['status'];
        if ($request->hasFile('image')) {
            $feature->image = $request->file('image')->store('public/upload');
        }
        $feature->save();
        return redirect('/admin/manage-feature');

    }

    public function featureSatus($id, $status){
        $feature = Feature::find($id);
        $feature->status=$status;
        $feature->save();
        return back();
    }

    public function deletefeature($id){
        $feature = Feature::find($id);
        if(!is_null($feature)){
            $feature->delete();
        }
        return redirect('/admin/manage-feature');

    }


    // public function addAbout(){
    //     $about = About::first();
    //     // dd($about);
    //     $data = compact('about');
    //     return view('backend.Home.about.add-about')->with($data);
    // }
    public function storeAbout(Request $request){
        $data_id=$request->data_id;
        if($request->isMethod('GET')){
            $about = About::first();
            $data = compact('about');
            return view('backend.Home.about.add-about')->with($data);
        }else{
            if($data_id){
                $about = About::find($data_id);
            }else{
                $about = new About();
            }
                if($request->hasFile('image1')){

                    $about->image1 = $request->file('image1')->store('public/upload/');
                }
                if($request->hasFile('image2')){

                    $about->image2 = $request->file('image2')->store('public/upload/');
                }
                if($request->hasFile('image3')){

                    $about->image3 = $request->file('image3')->store('public/upload/');
                }

                $about->main_heading = $request['main_heading'];
                $about->sub_heading = $request['sub_heading'];
                $about->description = $request['description'];
                $about->point1 = $request['point1'];
                $about->point2 = $request['point2'];
                $about->point3 = $request['point3'];
                $about->point4 = $request['point4'];
                $about->save();
                return redirect()->back();
        }

    }

    public function addService(){
        $url = url('/admin/add-service');
        $serviceoffer = new Serviceoffer;
        $data = compact('serviceoffer', 'url');
       return view('backend.Home.service.add-service')->with($data);
    }

    public function serviceStore(Request $request){
            // Validate the request
        $validated = $request->validate([
            'svg_icon' => 'required|string',
            'main_heading' => 'required|string|max:255',
            'sub_heading' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'nullable|integer', // assuming status is optional and an integer
        ]);

        $serviceOfferCount = Serviceoffer::count();
        if ($serviceOfferCount < 6) {
            $serviceOffer = new Serviceoffer();
            $serviceOffer->svg_icon = $request->input('svg_icon');
            $serviceOffer->main_heading = $request->input('main_heading');
            $serviceOffer->sub_heading = $request->input('sub_heading');
            $serviceOffer->description = $request->input('description');
            $serviceOffer->status = $request->input('status', 1); // default to 1 if not provided
            $serviceOffer->save();

            return redirect()->back()->with('success', 'Service Offer added successfully.');
        } else {
            return redirect()->back()->with('error', 'You have already submitted the form 6 times.');
        }

    }

    public function manageService(){
        $serviceoffer = Serviceoffer::all();
        $data = compact('serviceoffer');
        return view('backend.Home.service.manage-service')->with($data);
    }

    public function editService($id){
        $serviceoffer = Serviceoffer::find($id);
        if(is_null($serviceoffer)){
            return view('backend.Home.service.manage-service');
        }
        else{
            $url = url('/admin/manage-service/update/'). "/" . $id;
            $data = compact('serviceoffer','url' );
            return view('backend.Home.service.add-service')->with($data);
        }
    }

    public function updateService($id, Request $request){
        $validated = $request->validate([
            'svg_icon' => 'required|string',
            'main_heading' => 'required|string|max:255',
            'sub_heading' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'nullable|integer', // assuming status is optional and an integer
        ]);
        $serviceOffer = Serviceoffer::find($id);
        $serviceOffer->svg_icon = $request->input('svg_icon');
        $serviceOffer->main_heading = $request->input('main_heading');
        $serviceOffer->sub_heading = $request->input('sub_heading');
        $serviceOffer->description = $request->input('description');
        $serviceOffer->status = $request->input('status', 1); // default to 1 if not provided
        $serviceOffer->save();
        return redirect('/admin/manage-service');
    }

    public function deleteService($id){
        $serviceOffer = Serviceoffer::find($id);
        if(!is_null($serviceOffer)){
            $serviceOffer->delete();
        }
        return redirect('/admin/manage-service');

    }

    public function serviceStatus($id , $status){
        $serviceOffer = Serviceoffer::find($id);
        $serviceOffer->status =$status;
        $serviceOffer->save();
        return back();
    }


    public function addTestimonial(){
        $url = url('/admin/add-testimonial');
        $testimonial = new Testimonial;
        $title = "Edit Testimonial";

        $data = compact('url','testimonial','title');
        return view('backend.Home.testimonial.add-testimonial')->with($data);
    }
    public function manageTestimonial(){
        $testimonial = Testimonial::all();
        $data = compact('testimonial');
        return view('backend.Home.testimonial.manage-testimonial')->with($data);
    }
    public function testimonialStore(Request $request){
        $testimonial = new Testimonial;
        if($request->hasFile('profile_image')){
            $testimonial->profile_image = $request->file('profile_image')->store('public/upload');
        }
        $testimonial->description = $request['description'];
        $testimonial->name = $request['name'];
        $testimonial->profile_name = $request['profile_name'];
        $testimonial->status = 1;
        $testimonial->save();
        return redirect()->back();

    }
    public function editTestimonial($id){
        $testimonial = Testimonial::find($id);

        if(is_null($testimonial)){
            return view('backend.Home.testimonial.manage-testimonial');
        }else{
            $url = url('/admin/manage-testimonial/update/'). "/" . $id;
            $title = "Edit Testimonial";
            $data = compact('url', 'testimonial','title');
            return view('backend.Home.testimonial.add-testimonial')->with($data);
        }
    }
    public function updateTestimonial($id, Request $request){
        $testimonial = Testimonial::find($id);
        if($request->hasFile('profile_image')){
            $testimonial->profile_image = $request->file('profile_image')->store('public/upload');
        }
        $testimonial->description = $request['description'];
        $testimonial->name = $request['name'];
        $testimonial->profile_name = $request['profile_name'];
        $testimonial->status = 1;
        $testimonial->save();
        return redirect()->back();


    }
    public function deleteTestimonial($id){
        $testimonial = Testimonial::find($id);
        if(!is_null($testimonial)){
            $testimonial->delete();
        }
        return redirect('/admin/manage-testimonial');

    }

    public function addProject(){
        $title = "Add Project";
        $url = url('/admin/add-project');

        $project = new Project(); // Initialize an empty Project instance
        $data = compact('title', 'url', 'project');
        return view('backend.Home.project.add-project')->with($data);
    }
    public function manageProject(){
       $project = Project::all();
        $data = compact('project');
        return view('backend.Home.project.manage-project')->with($data);
    }
    public function projectStore(Request $request){
        $project = new Project;
        $project->category = $request['category'];
        if($request->hasFile('project_image')){
            $project->project_image =$request->file('project_image')->store('public/upload');
        }
        $project->project_name = $request['project_name'];
        $project->slug = $request['slug'];
        $project->client_name = $request['client_name'];
        $project->project_type = $request['project_type'];
        $project->start_date = $request['start_date'];
        $project->end_date = $request['end_date'];
        $project->location = $request['location'];
        $project->project_detail = $request['project_detail'];
        $project->save();
        return redirect()->back();
    }
    public function editProject($id){
        $project = Project::find($id);
        if(is_null($project)){
            return view('backend.Home.project.manage-project');
        }else{
            $title = "Edit Product";
            $url = ('/admin/manage-project/update') . "/" . $id;
            $data = compact('title','url','project');
            return view('backend.Home.project.add-project')->with($data);
        }
    }
    public function updateProject($id, Request $request){
        $project = Project::find($id);
        $project->category = $request['category'];
        if($request->hasFile('project_image')){
            $project->project_image =$request->file('project_image')->store('public/upload');
        }
        $project->project_name = $request['project_name'];
        $project->slug = $request['slug'];
        $project->client_name = $request['client_name'];
        $project->project_type = $request['project_type'];
        $project->start_date = $request['start_date'];
        $project->end_date = $request['end_date'];
        $project->location = $request['location'];
        $project->project_detail = $request['project_detail'];
        $project->save();
        return redirect()->back();
    }
    public function deleteProject($id){
        $project = Project::find($id);
        if(!is_null($project)){
            $project->delete();
        }
        return redirect('/admin/manage-project');

    }
    public function projectStatus($id, $status){
        $project = Project::find($id);
        $project->status = $status;
        $project->save();
        return back();
    }

    public function addBlog(Request $request){
        $data_id = $request->data_id;
        if($request->isMethod('GET')){
            $data['title'] = "Add Blog";
            $data['url'] = url('/admin/add-blog');
            return view('backend.Blog.add-blog', $data);
        }else{

            if($data_id){
                $blog = Blog::find($data_id);
            }else{
                $blog = new Blog();
            }
                $blog->category = $request['category'];
                if($request->hasFile('blog_image')){
                    $blog->blog_image =$request->file('blog_image')->store('public/upload');
                }
                $blog->title = $request['title'];
                $blog->slug = $request['slug'];
                $blog->blog_detail = $request['blog_detail'];
                $blog->save();
                return redirect()->back();
        }
    }
    public function manageBlog(){
        $blog = Blog::all();
        $data = compact('blog');
        return view('backend.Blog.manage-blog')->with($data);
    }

    public function editBlog(Request $request, $id){

        $blog = Blog::find($id);
        if($request->isMethod('GET')){

            if(is_null($blog)){
                return view('backend.Blog.manage-blog');
            }else{
                $data['title'] = "Edit Blog";
                $data['url'] = url('/admin/manage-blog/edit/'). "/" . $id;
                $data['blog']=$blog;
                return view('backend.Blog.add-blog',$data);
            }

        }else{
            $blog->category = $request['category'];
            if($request->blog_image && $request->hasFile('blog_image')){
                $blog->blog_image =$request->file('blog_image')->store('public/upload');
            }
            $blog->title = $request['title'];
            $blog->slug = $request['slug'];
            $blog->blog_detail = $request['blog_detail'];
            $blog->save();
            return redirect('/admin/manage-blog');

        }


    }
    public function deleteBlog($id){
        $blog = blog::find($id);
        if(!is_null($blog)){
            $blog->delete();
        }
        return back();
    }
    public function blogStatus($id, $status){
        $blog = Blog::find($id);
        $blog->status = $status;
        $blog->save();
        return back();
    }

}
