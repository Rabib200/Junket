<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Blog ;
use App\Models\Feed ;
use App\Models\TourPlan ;
use App\Models\UpcommingTourPlan ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function dashboard(){
        return view('admin.index');
    }
    public function login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect('admin/dashboard')->with('message','Admin login successfully');
        }else{
            return redirect()->back()->with('message', 'Invaild email or password');
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with('message','Admin logout successfully');
    }
    public function register(){
        return view('admin.register');
    }
    public function registerCreate(Request $request){
       Admin::insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at'=> now(),
       ]);
       return redirect('admin/login')->with('message','Admin created successfully, you can login now');
    }

    public function get_blog_list(){
        $blogs = Blog::all();
        return view('admin.blogList', compact('blogs')) ;
    }
    public function get_feed_list(){
        $feeds = Feed::all();
        return view('admin.feedList', compact('feeds')) ;
    }
    public function get_running_list(){
        $runningPlans = TourPlan::all();
        return view('admin.runningList', compact('runningPlans')) ;
    }
    public function runningPlanEdit($id){
        $runningPlan = TourPlan::findOrFail($id);
        return view('admin.runningEdit', compact('runningPlan'));
    }
    public function runningPlanUpdate(Request $request, $id){
        $plan = TourPlan::findOrFail($id);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/runningTours',$fileName);
            $plan->image = $fileName;
        }
        $plan->group_name = Auth::guard('group')->user()->group_name;
        $plan->location = $request->location;
        $plan->short_description = $request->short_description;
        $plan->long_description = $request->long_description;
        $plan->cost_description = $request->cost_description;
        $plan->total_cost = $request->total_cost;
        $plan->booking_cost = $request->booking_cost;
        $plan->capacity = $request->capacity;
        $plan->status = 'pending';
        $plan->save();
        return redirect('admin/running_list');
    }
    public function runningPlanDelete($id){
        $plan = TourPlan::find($id);
        $plan->delete();
        return redirect('admin/running_list');
    }
    public function runningPlanStatus($id){
        $plan = TourPlan::find($id);
        if($plan->status == 'pending'){
            $plan->status = 'active';
        }else{
            $plan->status = 'pending';
        }
        $plan->update();
        return redirect()->back();
    }
    public function runningPlanSearch(Request $request){
        
        $runningPlans = TourPlan::where([
           ['location', '!=', NULL],
           [function ($query) use ($request){
            if (($term = $request->term)){
                $query->orWhere('location','LIKE','%' . $term . '%')->get();
            }
           }] 
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

            return view('admin.runninglist', compact('runningPlans'));
        
    }


    public function get_upcoming_list(){
        $upcomingPlans = UpcommingTourPlan::all();
        return view('admin.upcomingList', compact('upcomingPlans')) ;
    }

    public function upcomingPlanEdit($id){
        $upcomingPlan = UpcommingTourPlan::findOrFail($id);
        return view('admin.upcomingEdit', compact('upcomingPlan'));
    }
    public function upcomingPlanUpdate(Request $request, $id){
        $plan = UpcommingTourPlan::findOrFail($id);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/upcommingTours',$fileName);
            $plan->image = $fileName;
        }
        $plan->group_name = Auth::guard('group')->user()->group_name;
        $plan->location = $request->location;
        $plan->short_description = $request->short_description;
        $plan->long_description = $request->long_description;
        $plan->cost_description = $request->cost_description;
        $plan->total_cost = $request->total_cost;
        $plan->booking_cost = $request->booking_cost;
        $plan->capacity = $request->capacity;
        $plan->status = 'pending';
        $plan->save();
        return redirect('admin/upcoming_list');
    }
    public function upcomingPlanDelete($id){
        $plan = UpcomingTourPlan::find($id);
        $plan->delete();
        return redirect('admin/upcoming_list');
    }
    public function upcomingPlanSearch(Request $request){
        
        $upcomingPlans = UpcommingTourPlan::where([
           ['location', '!=', NULL],
           [function ($query) use ($request){
            if (($term = $request->term)){
                $query->orWhere('location','LIKE','%' . $term . '%')->get();
            }
           }] 
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

            return view('admin.upcominglist', compact('upcomingPlans'));
        
    }
}
