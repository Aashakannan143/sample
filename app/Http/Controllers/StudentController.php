<?php
 
namespace App\Http\Controllers; 
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class StudentController extends Controller{

	public function city()
	{
		return view('city');
	}

	public function city_view()
	{   
		$detail=DB::select('select* from city') ;
		return view('city_view',compact('detail'));
	}
	public function submit_city(Request $request)
	{
		if(empty($request->input('city')===false))
		{
			$city=$request->input('city');
			$data=array('city'=>$city);
			DB::table('city')->insert($data);	
		}
        $city_view=$this->city_view();
        return $city_view ;
	}
	public function delete_city($id)
	{
       DB::delete('delete from city where id='.$id);
         $detail=DB::select('select* from city') ;
        return view('city_view',compact('detail'));
	}
	public function edit_city($id)
	{
	 $details= DB::select('select * from city where id='.$id);
     return view('city_edit' ,compact('details'));
	}

	public function update_city(Request $request)
	{
      $id=$request->input('id');
      $city=$request->input('city');
       DB::update('update city set city="'.$city.'"where id='.$id);
       // DB::update('update city set city="'.$city.'"where id=');
            $detail= DB::select('select * from city');
      return view('city_view',compact('detail'));
	}
	
	public function area()
	{   
		$detail=DB::select('select *from city');
		return view('area',compact('detail'));
	}
    public function area_view()
    {
    	$detail=DB::select('select  city.city,area.id,area.area,area.city_id from area join city on city.id=area.city_id') ;
		return view('area_view',compact('detail'));
	}
    public function submit_area(Request $request)
    {
      if(empty($request->input('area')===false)){
      	    $id=$request->input('id');
      	    $city_id=$request->input('city');
      	    $area=$request->input('area');
			$data=array("city_id"=>$city_id,"area"=>$area,"id"=>$id);
			DB::table('area')->insert($data);
			$detail=DB::select('select  city.city,area.id,area.area,area.city_id from area join city on city.id=area.city_id');
			return view('area_view',compact('detail'));
      }
    }
    public function delete_area($id)
    {

       DB::delete('delete from area where id='.$id);
         $detail=DB::select('select  city.city,area.id,area.area,area.city_id from area join city on city.id=area.city_id') ;
        return view('area_view',compact('detail'));
    }
    public function edit_area($id)
	{
	 $detail= DB::select('select * from area where id='.$id);
	 $city=DB::select('select * from city');
     return view('area_edit' ,compact('detail','city'));
    }
    public function update_area(Request $request)
    {   
    	$id=$request->input('id');
    	$city_id=$request->input('city');
        $area=$request->input('area');
       DB::update('update area set area="'.$area.'",city_id="'.$city_id.'" where id='.$id);
           $detail=DB::select('select  city.city,area.id,area.area,area.city_id from area join city on city.id=area.city_id') ;
      return view('area_view',compact('detail'));
    }
    public function pincodeview()
    {
    	$detail=DB::select('select  pincode.id ,city.city,area.area,area.city_id,pincode.pincode from pincode join area on area.id=pincode.area_id join city on area.city_id=city.id' ) ;
		return view('pincode_view',compact('detail'));
    }
    public function submit_pincode(Request $request)
    {
    	if(empty($request->input('pincode')===false)){
    		$id=$request->input('id');
    		$area_id=$request->input('area');
      	    $city_id=$request->input('city');
      	    $pincode=$request->input('pincode');
			$data=array("city_id"=>$city_id,"area_id"=>$area_id,"pincode"=>$pincode,"id"=>$id);
			DB::table('pincode')->insert($data);
			$pincode=$this->pincodeview();
			
			return $pincode;
		}
    }
    public function pincode()
    {
        $detail=DB::select('select *from city');
        $detailss=DB::select('select *from area');
		return view('pincode',compact('detail','detailss'));

    }
    public function delete_pincode($id)
    {
    	DB::delete('delete from pincode where id='.$id);
    	$pin=$this->pincodeview();
		 return $pin;
    }
    public function edit_pincode($id)
    {
        $pincode= DB::select('select * from pincode where id='.$id);
        $city=DB::select('select * from city');
        $area=DB::select('select * from  area');

        return view('pincode_edit',compact('pincode','city','area'));
    }
    public function update_pincode(Request $request)
    {
    	    $id=$request->input('id');
    		$area_id=$request->input('area');
      	    $city_id=$request->input('city');
      	    $pincode=$request->input('pincode');
      	    DB::update('update pincode set pincode="'.$pincode.'",city_id="'.$city_id.'",area_id="'.$area_id.'" where id='.$id);
            $pin=$this->pincodeview();
		 return $pin;
    }
	
	
}
