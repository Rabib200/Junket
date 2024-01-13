<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller{

    public function index(){
        $feeds =  Feed::where('status','=','active')->get();
        return view('frontend.feeds.feed', compact('feeds'));
    }

    public function add(){
        return view('group.addFeed');
    }
    public function create(Request $request){
        $feed = new Feed();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/feeds',$fileName);
            $feed->image = $fileName;
        }
        $feed->group_name = Auth::guard('group')->user()->group_name;
        $feed->heading = $request->heading;
        $feed->short_description = $request->short_description;
        $feed->long_description = $request->long_description;
        $feed->status = 'pending';
        $feed->save();
        return redirect()->back();
    }
    public function details($id){
        $feed = Feed::find($id);
        return view('frontend.feeds.details', compact('feed'));
    }
    public function feedEdit($id){
        $feed = Feed::findOrFail($id);
        return view('admin.feedEdit', compact('feed'));
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
        return redirect('admin/feed_list');
    }
    public function feedDelete($id){
        $feed = Feed::find($id);
        $feed->delete();
        return redirect('admin/feed_list');
    }
    public function feedStatus($id){
        $feed = Feed::find($id);
        if($feed->status == 'pending'){
            $feed->status = 'active';
        }else{
            $feed->status = 'pending';
        }
        $feed->update();
        return redirect()->back();
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

            return view('admin.feedList', compact('feeds'));
        
    }

}


?>