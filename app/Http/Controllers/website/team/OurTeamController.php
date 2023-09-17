<?php
namespace App\Http\Controllers\website\team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\OurTeam;
use Carbon\Carbon;
use Image;
class OurTeamController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
      }
      public function index(){
        $all=OurTeam::where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.team.OurTeam.all',compact('all'));
      }
      public function add(){
        return view('admin.team.OurTeam.add');
      }
      public function edit($slug){
        $data=OurTeam::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.team.OurTeam.edit',compact('data'));
      }
      public function view($slug){
        $data=OurTeam::where('status',1)->where('slug',$slug)->firstOrFail();
        return view('admin.team.OurTeam.view',compact('data'));
      }
      public function insert(Request $request){
        $creator=Auth::user()->id;
        $slug='BAN'.uniqid('20');
        $insert=OurTeam::insertGetId([
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
          OurTeam::where('HEvent_id',$insert)->update([
            'image'=>$imageName,
          ]);
        }
        // bg image upload here 
        if($request->hasFile('bgimage')){
          $image=$request->file('bgimage');
          $imageName='handsbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('uploads/'.$imageName);
    
          OurTeam::where('HEvent_id',$insert)->update([
            'bgimage'=>$imageName,
          ]);
        }
        // *********
        if($insert){
          Session::flash('success','value');
          return redirect('dashboard/website/team/OurTeam/add');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/team/OurTeam/add');
        }
      }
    
      public function update(Request $request){
    
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
    
        $update=OurTeam::where('status',1)->where('HEvent_id',$id)->update([
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
    
          OurTeam::where('HEvent_id',$id)->update([
            'image'=>$imageName,
          ]);
        }

        if($request->hasFile('bgimage')){
          $image=$request->file('bgimage');
          $imageName='handsbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('uploads/'.$imageName);
    
          OurTeam::where('HEvent_id',$id)->update([
            'bgimage'=>$imageName,
          ]);
        }

        if($update){
          Session::flash('success','value');
          return redirect('dashboard/website/team/OurTeam/view/'.$slug);
        }else{
          Session::flash('error','value');
          return redirect('dashboard/website/team/OurTeam/edit/'.$slug);
        }
    
      }
      public function softdelete($id){
        $post =OurTeam::where('HEvent_id',$id);
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
      
        $post =OurTeam::withTrashed()->where('HEvent_id',$id);
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
        $post =OurTeam::where('HEvent_id',$id);
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
        $all=OurTeam::onlyTrashed()->where('status',1)->orderBy('HEvent_id','DESC')->get();
        return view('admin.team.OurTeam.recycle',compact('all'));
      }
}