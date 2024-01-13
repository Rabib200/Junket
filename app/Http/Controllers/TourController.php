<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\TourGroup;
use Illuminate\Http\Request;
use App\Models\TourPlan;
use App\Models\UpcommingTourPlan;

class TourController extends Controller
{
    public function index(){
        $runningplans = TourPlan::where('status','=','active')->get();
      return view('frontend.tourPlans.tours',compact('runningplans'));
    }
    public function upcomming(){
        $upcommingPlans = UpcommingTourPlan::where('status','=','active')->get();
        return view('frontend.tourPlans.upcomming',compact('upcommingPlans'));
    }
    public function groups(){
        $groups = TourGroup::all();
        return view('frontend.groups.groups', compact('groups'));
    }
    public function runningPlanDetails($id){
        $count = Comment::where('tour_type','Running')->where('plan_id',$id)->count();
        $comments = Comment::where('tour_type','Running')->where('plan_id',$id)->get();
        $plan = TourPlan::find($id);
        return view('frontend.tourPlans.runningDetails',compact('plan','count','comments'));
    }
    public function upcommingPlanDetails($id){
        $count = Comment::where('tour_type','Upcomming')->where('plan_id',$id)->count();
        $comments = Comment::where('tour_type','Upcomming')->where('plan_id',$id)->get();
        $plan = UpcommingTourPlan::find($id);
        return view('frontend.tourPlans.upcommingDetails',compact('plan','count','comments'));
    }

}