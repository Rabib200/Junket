<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::where('status','=','active')->get();
        return view('frontend.blogs.blogs', compact('blogs'));
    }
    public function add(){
        return view('group.addBlog');
    }
    public function create(Request $request){
        $blog = new Blog();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/blogs',$fileName);
            $blog->image = $fileName;
        }
        $blog->group_name = Auth::guard('group')->user()->group_name;
        $blog->heading = $request->heading;
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        $blog->status = 'pending';
        $blog->save();
        return redirect()->back();
    }
    public function details($id){
        $blog = Blog::find($id);
        return view('frontend.blogs.details', compact('blog'));
    }
    public function blogEdit($id){
    
        $blog = Blog::findOrFail($id);
        return view('admin.blogEdit', compact('blog'));
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
        return redirect('admin/blog_list');
    }
    public function blogDelete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('admin/blog_list');
    }
    
    public function blogStatus($id){
        $blog = Blog::find($id);
        if($blog->status == 'pending'){
            $blog->status = 'active';
        }else{
            $blog->status = 'pending';
        }
        $blog->update();
        return redirect()->back();
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

            return view('admin.blogList', compact('blogs'));
        
    }

}
