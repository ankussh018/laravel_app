<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

use Illuminate\Support\Facades\Input;



class Admin_auth_controller extends Controller{

	public function home(){

		return view('login');
	}

	public function Login(Request $request){

		$input=$request->all();

		$data=DB::table('tbl_admin')->where('tbl_email',$input['email'])->where('tbl_password',md5($input['password']))->where('status',1)->get();

		if(count($data) >0 ){

			Session::put('admin_name',$data[0]->tbl_name);

			Session::put('adminID',$data[0]->id);

			Session::put('admin_type',$data[0]->admin_type);

	
			return redirect()->route('admin.dashboard')->with('message', 'Record added successfully!');

		}else{

			Session::put('error_msg',"UserID or Password is Wrong");

		 
		 return redirect()->back()->with('message', 'Invalid Username & Password!!');

		}	

	}

	public function logout() {
		
		Session::forget('admin_name');
		Session::forget('adminID');
		Session::forget('admin_type');
		Session::flush();
		if(!Session::has('adminID')){
		return redirect('/admin/login')->with('message', 'You have been successfully logged out!');
	}
		
	}








}







