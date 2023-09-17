<?php

namespace App\Http\Controllers\website\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\OurLatestBlog;
use Carbon\Carbon;
use Image;

class LatestBlogController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
      }
    
      public function index(){
        $all=OurLatestBlog::where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.blog.OurLatestBlog.all',compact('all'));
      }

      public function add(){
        return view('admin.blog.OurLatestBlog.add');
      }

      public function edit($slug){
        $data=OurLatestBlog::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.blog.OurLatestBlog.edit',compact('data'));
      }
    
      public function view($slug){
        $data=OurLatestBlog::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.blog.OurLatestBlog.view',compact('data'));
      }
    
      public function insert(Request $request){
       
        $creator=Auth::user()->id;
        $slug='BAN'.uniqid('20');
        $insert=OurLatestBlog::insertGetId([
          'heading'=>$request['heading'],
          'title'=>$request['title'],
          'caption'=>$request['caption'],
          'subtitle'=>$request['subtitle'],
          'info'=>$request['info'],
          'button'=>$request['button'],
          'button_url'=>$request['button_url'],
          'creator'=>$creator,
          'slug'=>$slug,
          'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
    
        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='handsbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('uploads/'.$imageName);
    
          OurLatestBlog::where('HEvent_id',$insert)->update([
            'image'=>$imageName,
          ]);
        }
        // bg image upload here 
        if($request->hasFile('bgimage')){
          $image=$request->file('bgimage');
          $imageName='handsbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('uploads/'.$imageName);
    
          OurLatestBlog::where('HEvent_id',$insert)->update([
            'bgimage'=>$imageName,
          ]);
        }
        // *********
        if($insert){
          Session::flash('success','value');
          return redirect('dashboard/website/blog/OurLatestBlog/add');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/blog/OurLatestBlog/add');
        }
      }
    
      public function update(Request $request){
    
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
    
        $update=OurLatestBlog::where('status',1)->where('HEvent_id',$id)->update([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'caption'=>$request['caption'],
            'subtitle'=>$request['subtitle'],
            'info'=>$request['info'],
            'button'=>$request['button'],
            'button_url'=>$request['button_url'],
            'editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
    
        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='handsbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('uploads/'.$imageName);
    
          OurLatestBlog::where('HEvent_id',$id)->update([
            'image'=>$imageName,
          ]);
        }

        if($request->hasFile('bgimage')){
          $image=$request->file('bgimage');
          $imageName='handsbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('uploads/'.$imageName);
    
          OurLatestBlog::where('HEvent_id',$id)->update([
            'bgimage'=>$imageName,
          ]);
        }

      
    
        if($update){
          Session::flash('success','value');
          return redirect('dashboard/website/blog/OurLatestBlog/view/'.$slug);
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/blog/OurLatestBlog/edit/'.$slug);
        }
    
      }
      public function softdelete($id){
        $post =OurLatestBlog::where('HEvent_id',$id);
        $post->delete();
        // return redirect()->back()->with(['message'=>'Successfully deleted!!']);
        if($post){
          Session::flash('success_soft','value');
          return redirect()->back();
        }else{
          Session::flash('error_soft','value');
          return redirect()->back();
        }
      }
      //  Resotore data 
      public function restore($id){
      
        $post =OurLatestBlog::withTrashed()->where('HEvent_id',$id);
        $post->restore();
        // return redirect()->back()->with(['message'=>'Successfully deleted!!']);
        if($post){
          Session::flash('success_soft','value');
          return redirect()->back();
        }else{
          Session::flash('error_soft','value');
          return redirect()->back();
        }
    
    
      }
      // permanent delete data 
      public function delete($id)
      {
        $post =OurLatestBlog::where('HEvent_id',$id);
        $post->forceDelete();
        // return redirect()->back()->with(['message'=>'Successfully deleted!!']);
        if($post){
          Session::flash('success_soft','value');
          return redirect()->back();
        }else{
          Session::flash('error_soft','value');
          return redirect()->back();
        }
    
      } 
    
    
      public function recycle(){
        $all=OurLatestBlog::onlyTrashed()->where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.blog.OurLatestBlog.recycle',compact('all'));
      }
}
