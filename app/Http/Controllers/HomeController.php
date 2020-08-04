<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Square\SquareClient;
use Square\Environment;
use Square\Exceptions\ApiException;
use Square\Models\CreatePaymentRequest;
use Square\Models\Money;
use Session;
use Validator;
use Mail;

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
    	//dd($req->post_code);

    	$driving_info = DB::table('instructors_postalcodes')
            ->join('postal_codes', 'postal_codes.id', '=', 'instructors_postalcodes.postid')
            ->join('instructors', 'instructors.id', '=', 'instructors_postalcodes.insid')
            ->where('postal_codes.postal_code',$req->post_code)
            ->select('instructors.*')
            ->get();
        
    	if(count($driving_info)==0)
    	{
    		return redirect()->back()->withError('No instructors available against this  Postal Code ');
    	}
    //dd($driving_info);	
    	return view('instructors_list')->with('code',$req->post_code)->with('driving_info',$driving_info);
    	
    	
    }
    public function viewInstructors(Request $req)
    {

    	return view('instructors_list');
    }
    public function displayCourses(Request $req)
    {
      //dd($req->driver_no);
      //courseinfo
      //instructors
      //courses_instrcutors
    	$courses_info = DB::table('courses_instructors')
            ->join('courseinfo', 'courseinfo.id', '=', 'courses_instructors.cid')
            ->join('instructors', 'instructors.id', '=', 'courses_instructors.insid')
            ->where('courses_instructors.insid',$req->driver_no)
            ->select('courseinfo.*','instructors.Name as driverName')
            ->get();
      
    	if(count($courses_info)==0)
    	{
    		return redirect()->back()->withError('No courses available against this  instructor');
    	}
    	$driver_id = $req->driver_no;
    	
    	return view('coursesList',compact('courses_info','driver_id'));
    	
    }

   public function bookCourse(Request $req)
   {
   	//dd($req);
   	   $validator=Validator::make($req->all(),[
        'driverID' => 'required',
         'courseID' => 'required',
         'std_status' => 'required',
         'first_name' => 'required',
         'last_name' => 'required',
         'telephone' =>'required',
         'postcode'=> 'required',
         'gear_status'=> 'required',
         'fdd' => 'required',
         'terms_status' => 'required',
        
        ]);
     if ($validator->fails()) {
       //return redirect()->back()
         //       ->withError($validator->errors()->first())
           //     ->withInput();
        return redirect()->back()->withError('Required input missing ');
      }
    //input validated put it into session array here
    
    $instructorName=DB::table('instructors')->select('Name')->where('id',$req->driverID)->first();
    $driverName=$instructorName->Name;
    $selectedCoursesInfo=DB::table('courseinfo')->select('name','price')->where('id',$req->courseID)->first();
     $this->storeDataIntoSessionArray($req,$driverName,$selectedCoursesInfo);
    return redirect()->to('checkOut');
   	//return view('checkOut');
   }
   public function storeDataIntoSessionArray($req,$driverName,$selectedCoursesInfo)
   {
   	    session()->forget('order_details');
        session()->push('order_details', [
            "driverID" => $req->driverID,
            "courseID" => $req->courseID,
            "std_status" => $req->std_status,
            "first_name" => $req->first_name,
            "email" => $req->email,
            "last_name" => $req->last_name,
            "telephone" => $req->telephone,
            "postcode" => $req->postcode,
            "gear_status" => $req->gear_status,
            "fdd" => $req->fdd,
            "driverName"=>$driverName,
            "coursePrice"=>$selectedCoursesInfo->price,
            "courseName"=>$selectedCoursesInfo->name
        ]);
   }
   public function checkOut(Request $req)
   {
    $order_details=session()->get('order_details');
    //dd($order_details[0]['courseName']);
   	return view('checkOut',compact('order_details'));
    
   }
   public function paymentProcesss(Request $req)
   {
    
   $this->insertDataofOrderDetails();
   	$api_client = new SquareClient([
   		'accessToken' => "EAAAEMYYAS2lGUqm9VjvWOeamZ0vz9n3EnodVkzuWAYVhdA0vopJmtUuvUlMQQas",
   		'environment' => Environment::SANDBOX
   	]);

// // In production, the environment arg is 'production'

   	$payments_api = $api_client->getPaymentsApi();
   	$nonce = $_POST['nonce'];
   	if (is_null($nonce)) {
   		echo "Invalid card data";
   		http_response_code(422);
   		return;
   	}
   	$money = new Money();
   	$money->setAmount(200);
   	$money->setCurrency('GBP');
   	$create_payment_request = new CreatePaymentRequest($nonce, uniqid(), $money);
   	try {
   		$response = $payments_api->createPayment($create_payment_request);
   	if ($response->isError()) {
    return redirect()->back()->withError('SomeThing Went Wrong');
    //echo 'Api response has Errors';
    //$errors = $response->getErrors();
    //var_dump($errors);
    exit();
  }

} catch (ApiException $e) {
   return redirect()->back()->withError('SomeThing Went Wrong');
/*  echo 'Caught exception!<br/>';
  exit();*/
}
$this->insertDataofOrderDetails();

    return redirect()->back()->withSuccess('Payment Successfully made ,Check Your mail');
   
   //function end 	 
   }
public function  insertDataofOrderDetails()
{
	//admin mail

       $order_details=session()->get('order_details');
       //dd($order_details);
    /*"driverID" => $req->driverID,
            "courseID" => $req->courseID,
            "std_status" => $req->std_status,
            "first_name" => $req->first_name,
            "last_name" => $req->last_name,
            "telephone" => $req->telephone,
            "postcode" => $req->postcode,
            "gear_status" => $req->gear_status,
            "fdd" => $req->fdd,
            "driverName"=>$driverName,
            "coursePrice"=>$selectedCoursesInfo->price,
            "courseName"=>$selectedCoursesInfo->name*/
    $driverMail=DB::table('instructors')->where('id',$order_details[0]['driverID'])->first();
    $driverMail=$driverMail->email;            
	$html='<h1>Booking Details</h1><br>
	      <p>Instructor  Name '.$order_details[0]['driverName'].'</p></br>
	        <p>Appointment  Date '.$order_details[0]['fdd'].'</p>
	        <p>Course Name '.$order_details[0]['courseName'].'</p>
	        <p>Customer First Name'.$order_details[0]['first_name'].'</p>
	        <p>Customer last Name '.$order_details[0]['last_name'].'</p>
	        <p>Customer Email '.$order_details[0]['email'].'</p>
	        <p>Customer Telephone '.$order_details[0]['telephone'].'</p>
	        <p>Postal Code '.$order_details[0]['postcode'].'</p>
            <p>Car Gear Type '.$order_details[0]['gear_status'].'</p>
	          ';
          
	Mail::send(array(), array(), function ($message) use ($html,$driverMail,$order_details) {
		$message->to('arhamtariq99@gmail.com')
		->subject('Booking Details')
		->cc($order_details[0]['email'])
		->bcc($driverMail)
		->from('army12ka4@gmail.com')
		->setBody($html, 'text/html');
	});
	//instructor mail
/*Mail::send(array(), array(), function ($message) use ($html) {
		$message->to(..)
		->subject(..)
		->from(..)
		->setBody($html, 'text/html');
	});
   //customer mail
   Mail::send(array(), array(), function ($message) use ($html) {
		$message->to(..)
		->subject(..)
		->from(..)
		->setBody($html, 'text/html');
	});*/


	//dd('reach');
}  
}
