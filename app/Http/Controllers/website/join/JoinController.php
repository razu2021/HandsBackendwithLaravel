<?php

namespace App\Http\Controllers\website\join;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class JoinController extends Controller
{
    //
    public function index(){
        $users = DB::table('students')->get();

        return view('admin.join.member',compact('users'));
    }

    public function join($id){

       

        //  $student=DB::table('students')
        //  ->join('subjects', function ($join) use($id){
        // $join->on('students.student_id', '=', 'subjects.student_id') 
        // ->where('students.student_id',$id);})
        // ->limit('1')
        // ->get();



            $student = DB::table('students')
            ->join('subjects', 'students.student_id', '=', 'subjects.student_id')
            ->join('student_roles', 'students.student_id', '=', 'student_roles.student_id')
            ->where('students.student_id', $id)
            ->limit('1')
            ->get();
        

          return view('admin.join.join',compact('student'));
    }




    // example database query builders 

    public function example(){

        $stu=DB::table('students')->get(); // how get value form a table 
        $users= DB::table('students')->where('name', 'razu')->first(); // how to show a specific row data 
        $singlevalue=DB::table('students')->where('name', 'raj')->value('Student_id'); // how to show single value in a specific row 
        $all =  DB::table('users')->find(1); // how show specific user all  information from a table 
        $studentdata =  DB::table('students')->where('Student_id',1)->get(); // how show specific user all  information from a table 
        $pluckuse = DB::table('students')->pluck('name'); // how to show specific all clumn data form a table 
        $usercount=DB::table('students')->count(); // how count my table fields 
        $max = DB::table('students')->max('Student_id'); // how to find max price in column 
        $min = DB::table('students')->min('Student_id'); // how to find max price in column 
        $avage = DB::table('students')->sum('Student_id'); // how to find max price in column 

// =========================================   Select statement code is start here ========================

        $selectusers = DB::table('students')->select('name', 'father_name as father')->get();  // how to use select method  frome a thbale 
        $distancusers = DB::table('users')->distinct()->get();  // show table all data without duplilcate value .
        $query = DB::table('users')->select('name');  // addSelect method used 
        $addselect = $query->addSelect('email')->get();
// =========================================   Select statement code is start here ========================
        $userproduct = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('products', 'users.id', '=', 'products.user_id')
            ->join('prices', 'products.product_id', '=', 'prices.product_id')
            ->select('users.*', 'contacts.contact_number', 'products.product_name','prices.product_price')
           ->where('users.id',1)
            ->get();  // how to create inner join  database table relationship with 3 tables 


        $lefjoin = DB::table('users')
            ->leftJoin('contacts', 'users.id', '=', 'contacts.user_id')
            ->leftJoin('products', 'users.id', '=', 'products.user_id')
            ->leftJoin('prices', 'products.product_id', '=', 'prices.product_id')
            ->select('users.*', 'contacts.contact_number', 'products.product_name','prices.product_price')
           ->where('users.id',1)
            ->get();  // how to create inner join  database table relationship with 3 tables 

        $rightjoin = DB::table('users')
            ->leftJoin('contacts', 'users.id', '=', 'contacts.user_id')
            ->leftJoin('products', 'users.id', '=', 'products.user_id')
            ->leftJoin('prices', 'products.product_id', '=', 'prices.product_id')
            ->select('users.*', 'contacts.contact_number', 'products.product_name','prices.product_price')
           ->where('users.id',1)
            ->get();  // how to create inner join  database table relationship with 3 tables 
// =========================================   Join class end herer code is start here ======================== 

            $where = DB::table('users')->where('id', '=',1)->where('name','=','md razu hossain raj')->get();  // where class use and fetch the data into ther databes 

            $orwhere = DB::table('users')->where('id',1) ->orWhere('name', 'sultana')->get();  // how to use where class & orWhere class 

            $wherebt = DB::table('prices')->whereBetween('product_price', [120, 600])->get(); // how to  use whereBetween and 120 to 600 er moddhe product gulo return korbe 
            $wherenotbt = DB::table('prices')->whereNotBetween('product_price', [420, 510])->get(); //how to  use whereBetween and 420 to 510 bad diye  product gulo return korbe 

            $inwhere = DB::table('students')
                    ->whereIn('Student_id', [1, 2, 3])
                    ->get();

            $inwherenot = DB::table('students')
                    ->whereNotIn('Student_id', [1, 2, 3])
                    ->get();
            $updateuser = DB::table('users')
                ->whereNotNull('updated_at')
                ->get();

            $date = DB::table('students')
                ->whereDate('updated_at', '2023-06-01')
                ->get();

            $day = DB::table('students')
                ->whereDay('updated_at', '22')
                ->get();

            $Month = DB::table('students')
                ->whereMonth('updated_at', '6')
                ->get();

            $Year = DB::table('students')
                ->whereYear('updated_at', '2023')
                ->get();

            $latest = DB::table('users')
                ->latest()
                ->first();

            $randomUser = DB::table('students')
                ->inRandomOrder()
                ->first();

                $query = DB::table('users')->orderBy('name');
 
                $usersOrderedByEmail = $query->reorder('email', 'desc')->get(); // how to use inrandomorder  ;

       $phone = Student::find(1);
      


        dd($phone);

       // echo $avage;

         return view('admin.join.example',compact('stu','users','singlevalue','all','studentdata','pluckuse','usercount','max','min','selectusers','distancusers','addselect','userproduct',
        'lefjoin','rightjoin','where','orwhere'));
        
    }


}
