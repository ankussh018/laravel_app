<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;
use App\adminmodel\Home_model;
use App\Models\User;
use Session;

use DB;

use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

use Image;



class Admin_home_controller extends Controller{


	public function index(){
		
		return view('backend/dashboard');
	}



	
}







