<?php

namespace App\Http\Controllers\website\manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\TeamSocial;
use Carbon\Carbon;
use Image;

class TeamSocialController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
      }
    
      public function index(){
        $all=TeamSocial::where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.manage.TeamSocial.all',compact('all'));
      }

      public function add(){
        return view('admin.manage.TeamSocial.add');
      }

      public function edit($slug){
        $data=TeamSocial::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.manage.TeamSocial.edit',compact('data'));
      }
    
      public function view($slug){
        $data=TeamSocial::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.manage.TeamSocial.view',compact('data'));
      }
    
      public function insert(Request $request){
       
        $creator=Auth::user()->id;
        $slug='BAN'.uniqid('20');
        $insert=TeamSocial::insertGetId([
          'facebook'=>$request['facebook'],
          'twitter'=>$request['twitter'],
          'linkedin'=>$request['linkedin'],
          'instagram'=>$request['instagram'],
          'youtube'=>$request['youtube'],
          'creator'=>$creator,
          'slug'=>$slug,
          'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
    
        if($insert){
          Session::flash('success','value');
          return redirect('dashboard/website/manage/TeamSocial/add');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/manage/TeamSocial/add');
        }
      }
    
      public function update(Request $request){
    
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
    
        $update=TeamSocial::where('status',1)->where('HEvent_id',$id)->update([
            'facebook'=>$request['facebook'],
            'twitter'=>$request['twitter'],
            'linkedin'=>$request['linkedin'],
            'instagram'=>$request['instagram'],
            'youtube'=>$request['youtube'],
            'editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
    

        if($update){
          Session::flash('success','value');
          return redirect('dashboard/website/manage/TeamSocial/view/'.$slug);
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/manage/TeamSocial/edit/'.$slug);
        }
    
      }
      public function softdelete($id){
        $post =TeamSocial::where('HEvent_id',$id);
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
      
        $post =TeamSocial::withTrashed()->where('HEvent_id',$id);
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
        $post =TeamSocial::where('HEvent_id',$id);
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
        $all=TeamSocial::onlyTrashed()->where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.manage.TeamSocial.recycle',compact('all'));
      }
}
