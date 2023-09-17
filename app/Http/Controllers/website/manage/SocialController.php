<?php
namespace App\Http\Controllers\website\manage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\OurSocial;
use Carbon\Carbon;
use Image;

class SocialController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
      }
    
      public function index(){
        $all=OurSocial::where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.manage.OurSocial.all',compact('all'));
      }

      public function add(){
        return view('admin.manage.OurSocial.add');
      }

      public function edit($slug){
        $data=OurSocial::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.manage.OurSocial.edit',compact('data'));
      }
    
      public function view($slug){
        $data=OurSocial::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.manage.OurSocial.view',compact('data'));
      }
    
      public function insert(Request $request){
       
        $creator=Auth::user()->id;
        $slug='BAN'.uniqid('20');
        $insert=OurSocial::insertGetId([
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
          return redirect('dashboard/website/manage/OurSocial/add');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/manage/OurSocial/add');
        }
      }
    
      public function update(Request $request){
    
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
    
        $update=OurSocial::where('status',1)->where('HEvent_id',$id)->update([
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
          return redirect('dashboard/website/manage/OurSocial/view/'.$slug);
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/manage/OurSocial/edit/'.$slug);
        }
    
      }
      public function softdelete($id){
        $post =OurSocial::where('HEvent_id',$id);
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
      
        $post =OurSocial::withTrashed()->where('HEvent_id',$id);
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
        $post =OurSocial::where('HEvent_id',$id);
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
        $all=OurSocial::onlyTrashed()->where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.manage.OurSocial.recycle',compact('all'));
      }
}
