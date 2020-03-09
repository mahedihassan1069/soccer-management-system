<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
   public function index(){
      
      return view('admin_login');
   }

   public function show_dash()
   {
   	return view('admin.dashbord');
   }

   public function dashbord(Request $request)
   {

   		$admin_email=$request->admin_email;
   		$admin_passowrd=$request->admin_password;
   		
         $result=DB::table('tbl_admins')
   		->where('email','=',$admin_email, 'AND', 'passowrd', '=' ,$admin_passowrd)->first();
         
         $teamResult=DB::table('tbl_teams')
         ->where('email','=',$admin_email, 'AND', 'password', '=' ,$admin_passowrd)->first();

         if($result!=null && $teamResult==null){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dash');
         }

         elseif ($result ==null && $teamResult!=null) {
            Session::put('admin_name',$teamResult->team_name);
            Session::put('admin_id',$teamResult->id);
            return Redirect::to('/event');
         }
         else {
   			Session::put('message','Email or Password invalid');
   			return Redirect::to('/admin');
   		}   
   }
}
