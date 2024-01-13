<?php

namespace App\Http\Controllers;

use App\Models\TourGroup;
use App\Models\TourPlan ;
use App\Models\UpcommingTourPlan ;
use App\Models\Feed;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TourGroupController extends Controller
{
    public function index(){
        return view('group.login');
    }
    public function register(){
        return view('group.register');
    }
    public function registerCreate(Request $request){
        $group = new TourGroup();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/groups',$fileName);
            $group->image = $fileName;
        }
        $group->group_name = $request->group_name;
        $group->owner_name = $request->owner_name;
        $group->email = $request->email;
        $group->phone = $request->phone;
        $group->password = Hash::make($request->password);
        $group->location = $request->location;
        $group->about_us = $request->about_us;
        $group->save();
        return redirect('group/login')->with('message','Account created successfylly!');
    }
    public function login(Request $request){
        $check = $request->all();
        if(Auth::guard('group')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect('group/dashboard')->with('message','Login successfully');
        }else{
            return redirect()->back()->with('message', 'Invaild email or password');
        }
    }
    public function dashboard(){
        return view('group.index');
    }
    public function logout(){
        Auth::guard('group')->logout();
        return redirect('group/login')->with('message','Logout successfully');
    }
    public function feedDetails($group_name){
        $feeds = Feed::where('group_name','=',$group_name)->get();
        return view('group.feedList' , compact('feeds'));
    }
    public function feedEdit($id){
        $feed = Feed::findOrFail($id);
        return view('group.feedEdit', compact('feed'));
    }
    public function feedUpdate(Request $request,$id){

        $feed = Feed::findOrFail($id);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/feeds',$fileName);
            $feed->image = $fileName;
        }
        $feed->heading = $request->heading;
        $feed->short_description = $request->short_description;
        $feed->long_description = $request->long_description;
        $feed->status = 'pending';
        $feed->update();
        return redirect('group/feed/list/'.$feed->group_name);
    }
    public function feedDelete($id){
        $feed = Feed::find($id);
        $feed->delete();
        return redirect('group/feed/list/'.$feed->group_name);
    }
    public function blogDetails($group_name){
        $blogs = Blog::where('group_name','=',$group_name)->get();
        return view('group.blogList' , compact('blogs'));
    }
    public function blogEdit($id){
        $blog = Blog::findOrFail($id);
        return view('group.blogEdit', compact('blog'));
    }
    public function blogUpdate(Request $request,$id){

        $blog = Blog::findOrFail($id);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/blogs',$fileName);
            $blog->image = $fileName;
        }
        $blog->heading = $request->heading;
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        $blog->status = 'pending';
        $blog->update();
        return redirect('group/blog/list/'.$blog->group_name);
    }
    public function blogDelete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('group/blog/list/'.$blog->group_name);
    }
    public function blogSearch(Request $request){
        
        $blogs = Blog::where([
           ['heading', '!=', NULL],
           [function ($query) use ($request){
            if (($term = $request->term)){
                $query->orWhere('heading','LIKE','%' . $term . '%')->get();
            }
           }] 
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

            return view('group.blogList', compact('blogs'));
        
    }
    public function feedSearch(Request $request){
        
        $feeds = Feed::where([
           ['heading', '!=', NULL],
           [function ($query) use ($request){
            if (($term = $request->term)){
                $query->orWhere('heading','LIKE','%' . $term . '%')->get();
            }
           }] 
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

            return view('group.feedList', compact('feeds'));
        
    }


    public function get_running_list(){
        $runningPlans = TourPlan::all();
        return view('group.runningList', compact('runningPlans')) ;
    }
    public function runningPlanEdit($id){
        $runningPlan = TourPlan::findOrFail($id);
        return view('group.runningEdit', compact('runningPlan'));
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
        return redirect('group/running_list');
    }
    public function runningPlanDelete($id){
        $plan = TourPlan::find($id);
        $plan->delete();
        return redirect('group/running_list');
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

            return view('group.runninglist', compact('runningPlans'));
        
    }


    public function get_upcoming_list(){
        $upcomingPlans = UpcommingTourPlan::all();
        return view('group.upcomingList', compact('upcomingPlans')) ;
    }

    public function upcomingPlanEdit($id){
        $upcomingPlan = UpcommingTourPlan::findOrFail($id);
        return view('group.upcomingEdit', compact('upcomingPlan'));
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
        return redirect('group/upcoming_list');
    }
    public function upcomingPlanDelete($id){
        $plan = UpcomingTourPlan::find($id);
        $plan->delete();
        return redirect('group/upcoming_list');
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

            return view('group.upcominglist', compact('upcomingPlans'));
        
    }
}
