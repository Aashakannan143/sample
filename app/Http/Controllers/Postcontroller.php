<?php
 
namespace App\Http\Controllers; 
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class Postcontroller extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function viewform()
    {   $detail=DB::select('select* from student') ;
            return view('student_view',compact('detail'));  
      
    }
    public function submit_data(Request $request)
    {   
        
    	if(empty($request->input("name")===false)){
    		$name=$request->input("name");
    		$mobile=$request->input("mobile");
            $email=$request->input("email");
            $data=array("name"=>$name,"mobile"=>$mobile,"email"=>$email);
            DB::table('student')->insert($data);
            $detail=DB::select('select* from student') ;
            return view('student_view',compact('detail'));
            echo "Data created sucessfully";
        } 
         else{
            echo "Ur data not insert";
         }  
    }  
    public function student_form(){
        return view('student_form');
    } 
    public function delete_data($id){
        DB::delete('delete from student where id='.$id);
         $detail=DB::select('select* from student') ;
        return view('student_view',compact('detail'));
    } 
    public function edit($id)
    {
     $details= DB::select('select * from student where id='.$id);
     return view('edit' ,compact('details'));
    }
    public function update(Request $request)
    { $id=$request->input('id');
      $name=$request->input('name');
      $mobile=$request->input('mobile');
      $email=$request->input('email');
      DB::update('update student set name="'.$name.'",mobile="'.$mobile.'",email="'.$email.'" where id='.$id);
            $detail= DB::select('select * from student');
      return view('student_view',compact('detail'));
    }

      
}