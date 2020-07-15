<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    //
    public function main()
    {
    
    
    return view('main');

	}
	public function getPostalCodes(Request $req)
	{
	
   	$search = $req->get('term');
      
          $result = DB::table('postal_codes')->where('postal_code', 'LIKE', '%'. $search. '%')->get();
 
          return response()->json($result);

	}
    public function pickupLocation(Request $req)
    {
    	
    	if(1==2)
    	{
    		return redirect()->back()->withError('Invalid Postal Code');
    	}
    	return view('instructors_list')->with('code',$req->post_code);
    	
    	
    }
    public function viewInstructors(Request $req)
    {
    	return view('instructors_list');
    }
    public function displayCourses(Request $req)
    {
    	if(1==2)
    	{
    		return redirect()->back()->withError('Invalid Postal Code');
    	}
    	return view('coursesList')->with('code','driver name');
    	
    }

   public function bookCourse(Request $req)
   {
   	dd($req);
   }
}
