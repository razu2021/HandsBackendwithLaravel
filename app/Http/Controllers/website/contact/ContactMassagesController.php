<?php

namespace App\Http\Controllers\website\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\ContactMassages;
use Carbon\Carbon;
use Image;
class ContactMassagesController extends Controller
{
    //
    public function index(){
        $all=ContactMassages::where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.contact.ContactMassages.all',compact('all'));
      }
      public function add(){
        return view('admin.contact.ContactMassages.add');
      }
      public function view($slug){
        $data=ContactMassages::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.contact.ContactMassages.view',compact('data'));
      }
      public function insert(Request $request){

        $slug='BAN'.uniqid('20');
        $insert=ContactMassages::insertGetId([
          'name'=>$request['name'],
          'phone'=>$request['phone'],
          'email'=>$request['email'],
          'massage'=>$request['massage'],
          'slug'=>$slug,
          'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
    

        if($insert){
          Session::flash('success','value');
          return redirect()->back();
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/contact/ContactMassages/add');
        }
     }
    
      public function softdelete($id){
        $post =ContactMassages::where('HEvent_id',$id);
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
      
        $post =ContactMassages::withTrashed()->where('HEvent_id',$id);
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
        $post =ContactMassages::where('HEvent_id',$id);
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
        $all=ContactMassages::onlyTrashed()->where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.contact.ContactMassages.recycle',compact('all'));
      }
}
