<?php

namespace App\Http\Controllers\website\bcomev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\BecomeVolunteer;
use Carbon\Carbon;
use Image;

class BecomeVolunteerNewController extends Controller
{
    //

    
    public function index(){
        $all=BecomeVolunteer::where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.BecomeVolunteer.BecomeVolunteer.all',compact('all'));
      }

      public function add(){
        return view('admin.BecomeVolunteer.BecomeVolunteer.add');
      }

    
      public function view($slug){
        $data=BecomeVolunteer::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.BecomeVolunteer.BecomeVolunteer.view',compact('data'));
      }
    
      public function insert(Request $request){
        $this->validate($request,[
            'fname'=>'required',
        ]);

        $slug='BAN'.uniqid('20');
        $insert=BecomeVolunteer::insertGetId([
          'fname'=>$request['fname'],
          'lname'=>$request['lname'],
          'phone'=>$request['phone'],
          'email'=>$request['email'],
          'nid'=>$request['nid'],
          'riligion'=>$request['riligion'],
          'birth_date'=>$request['birth_date'],
          'gender'=>$request['gender'],
          'address'=>$request['address'],
          'massage'=>$request['massage'],
          'slug'=>$slug,
          'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
    
        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='handsbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/'.$imageName);
    
          BecomeVolunteer::where('HEvent_id',$insert)->update([
            'image'=>$imageName,
          ]);
        }
       
        if($insert){
          Session::flash('success','value');
          return redirect()->back();
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/BecomeVolunteer/BecomeVolunteer/add');
        }
     }
    
      public function softdelete($id){
        $post =BecomeVolunteer::where('HEvent_id',$id);
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
      
        $post =BecomeVolunteer::withTrashed()->where('HEvent_id',$id);
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
        $post =BecomeVolunteer::where('HEvent_id',$id);
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
        $all=BecomeVolunteer::onlyTrashed()->where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.BecomeVolunteer.BecomeVolunteer.recycle',compact('all'));
      }
}
