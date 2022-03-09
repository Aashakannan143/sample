<?php
 
namespace App\Http\Controllers; 
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class StudentdataController extends Controller
{
   public function student()
   {
   	$city=DB::select('select * from city');
    $area=DB::select('select * from  area');
    $pincode=DB::select('select * from pincode');
   	return view('student', compact('city','area','pincode'));
   }
   public function studentview()
   {
   	$alldata=DB::select('select student.id,student.name,student.dob,student.address,student.pincode_id,city.city,area.area,area.city_id,student.area_id from student join area on area.id=student.area_id join city on city.id=student.city_id');
   	return view('studentview',compact('alldata'));
   }

   public function submit_student(Request $request)
   {
   	if(empty($request->input('name')===false))
   	    {
    		$id=$request->input('id');
    		$name=$request->input('name');
    		$dob=$request->input('date');
    		$pincode=$request->input('pincode');
    		$address=$request->input('address');
    		$area_id=$request->input('area');
      	    $city_id=$request->input('city');
      	    
			$data=array("name"=>$name,"dob"=>$dob,"address"=>$address,"city_id"=>$city_id,"area_id"=>$area_id,"id"=>$id,"pincode_id"=>$pincode);
			DB::table('student')->insert($data);
			$student=$this->studentview();
			
			return $student;
        }

    }
    public function delete_student($id)
    {
    	DB::delete('delete from student where id='.$id);
    	$student=$this->studentview();
    	return $student;
    }
    public function edit_student($id)
    {
      $student_edit=DB::select('select * from student where id='.$id);
      $city=DB::select('select * from city');
      $area=DB::select('select * from area');
      return view('studentedit',compact('student_edit','city','area'));
    }
    public function update_student(Request $request)
    {
    	    $id=$request->input('id');
    		$name=$request->input('name');
    		$dob=$request->input('date');
    		$pincode=$request->input('pincode');
    		$address=$request->input('address');
    		$area_id=$request->input('area');
      	    $city_id=$request->input('city');
      	    DB::update('update student set name="'.$name.'",dob="'.$dob.'",pincode_id="'.$pincode.'",address="'.$address.'",area_id="'.$area_id.'",city_id="'.$city_id.'" where id='.$id);
      	   
      	    $student=$this->studentview();
      	    return $student;
    }
}    
