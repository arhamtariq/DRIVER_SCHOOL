<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Square\SquareClient;
use Square\Environment;
use Square\Exceptions\ApiException;
use Square\Models\CreatePaymentRequest;
use Square\Models\Money;

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
   	//dd($req);
    return redirect()->to('checkOut');
   	//return view('checkOut');
   }
   public function checkOut(Request $req)
   {

   	return view('checkOut');
    
   }
   public function paymentProcesss(Request $req)
   {


   	$api_client = new SquareClient([
   		'accessToken' => "EAAAECZIBlQox0rte8-6LupzvaYRGmdqmDVxt7Noj4rN-4cTTStUiGKPPeWO6ko4",
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
   	$money->setCurrency('USD');
   	$create_payment_request = new CreatePaymentRequest($nonce, uniqid(), $money);
   	try {
   		$response = $payments_api->createPayment($create_payment_request);
   	if ($response->isError()) {
    return redirect()->back()->withError('SomeThing Went Wrong');
  /*  echo 'Api response has Errors';
    $errors = $response->getErrors();
    exit();*/
  }

} catch (ApiException $e) {
   return redirect()->back()->withError('SomeThing Went Wrong');
/*  echo 'Caught exception!<br/>';
  exit();*/
}
    return redirect()->back()->withSuccess('Payment Successfully made ,Check Your mail');
   
   //function end 	 
   }
}
