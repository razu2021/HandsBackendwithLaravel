<?php

namespace App\Http\Controllers\website\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\HomeBanner;
use Carbon\Carbon;
use Image;

class HomeBannerController extends Controller
{
//
public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $all=HomeBanner::where('ban_status',1)->orderBy('ban_id','DESC')->get();
    return view('admin.home.HomeBanner.all',compact('all'));


  }
  

  public function add(){
    return view('admin.home.HomeBanner.add');
  }

  public function edit($slug){
    $data=HomeBanner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
    return view('admin.home.HomeBanner.edit',compact('data'));
  }

  public function view($slug){
    $data=HomeBanner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
    return view('admin.home.HomeBanner.view',compact('data'));
  }

  public function insert(Request $request){
   
    $creator=Auth::user()->id;
    $slug='BAN'.uniqid('20');
    $insert=HomeBanner::insertGetId([
      'ban_title'=>$request['banner_title'],
      'ban_subtitle'=>$request['banner_subtitle'],
      'ban_information'=>$request['banner_information'],
      'ban_button'=>$request['banner_button'],
      'ban_url'=>$request['button_url'],
      'ban_creator'=>$creator,
      'ban_slug'=>$slug,
      'created_at'=>Carbon::now()->toDateTimeString(),
    ]);

    if($request->hasFile('pic')){
      $image=$request->file('pic');
      $imageName='banner-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->save('uploads/'.$imageName);

      HomeBanner::where('ban_id',$insert)->update([
        'ban_image'=>$imageName,
      ]);
    }

    if($insert){
      Session::flash('success','value');
      return redirect('dashboard/website/home/banner/add');
    }else{
      Session::flash('error','value');
      return redirect('dashboard/website/home/banner/add');
    }
  }

  public function update(Request $request){

    $id=$request['id'];
    $slug=$request['slug'];
    $editor=Auth::user()->id;

    $update=HomeBanner::where('ban_status',1)->where('ban_id',$id)->update([
      'ban_title'=>$request['banner_title'],
      'ban_subtitle'=>$request['banner_subtitle'],
      'ban_information'=>$request['banner_information'],
      'ban_button'=>$request['banner_button'],
      'ban_url'=>$request['button_url'],
      'ban_editor'=>$editor,
      'updated_at'=>Carbon::now()->toDateTimeString(),
    ]);

    if($request->hasFile('pic')){
      $image=$request->file('pic');
      $imageName='banner-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->save('uploads/'.$imageName);

      HomeBanner::where('ban_id',$id)->update([
        'ban_image'=>$imageName,
      ]);
    }

    if($update){
      Session::flash('success','value');
      return redirect('dashboard/website/home/banner/view/'.$slug);
    }else{
      Session::flash('error','value');
      return redirect('dashboard/website/home/banner/edit/'.$slug);
    }

  }
  public function softdelete($id){
    $post =HomeBanner::where('ban_id',$id);
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
  
    $post =HomeBanner::withTrashed()->where('ban_id',$id);
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
    $post =HomeBanner::where('ban_id',$id);
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
    $all=HomeBanner::onlyTrashed()->where('ban_status',1)->orderBy('ban_id','DESC')->get();
    return view('admin.home.HomeBanner.recycle',compact('all'));
  }

}
