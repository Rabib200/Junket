<?php

namespace App\Http\Controllers;

use App\Models\TourPlan;
use App\Models\UpcommingTourPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourPlanController extends Controller
{
    /*-----------Running plan functions---------- */

    public function addRunningPlan(){
        return view('group.addRunningPlan');
    }
    public function RunningPlanCreate(Request $request){
        $plan = new TourPlan();
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
        return redirect()->back();
    }

    /*-----------Running plan functions end---------- */

    /*-----------Upcomming plan functions---------- */

    public function addUpcommingPlan(){
        return view('group.addUpcommingPlan');
    }
    public function UpcommingPlanCreate(Request $request){
        $plan = new UpcommingTourPlan();
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
        return redirect()->back();
    }

    /*-----------Running plan functions end---------- */
}