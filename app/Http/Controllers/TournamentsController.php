<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class TournamentsController extends Controller
{
   public function index()
   {
   	  return view('admin.add_tournaments');

   }
//get data frome phpmyadmin.....
   public function all_event()
   {

   	$all_event_info=DB::table('tbl_tournaments')->get();
   	$manage_event=view('admin.all_tournaments')
   	->with('all_event_info',$all_event_info);

   	return view('admin_layout')
   	->with('admin.all_tournaments',$manage_event);
   	//return view('admin.all_tournaments');
   }
//insert phpmyadmin
   public function save_event(Request $request)
   {
   		$data=array();
   		$data['tournaments_id']=$request->tournaments_id;
   		$data['clube_name']=$request->clube_name;
   		$data['clube_pic']=$request->clube_pic;
   		$data['post_date']=$request->post_date;
   		$data['tournaments_title']=$request->tournaments_title;
   		$data['match_start_date']=$request->match_start_date;
   		$data['motto_line']=$request->motto_line;
   		$data['description']=$request->description;
   		$data['post_pic']=$request->post_pic;
   		$data['tournaments_code']=$request->tournaments_code;

   		DB::table('tbl_tournaments')->insert($data);
   		Session::put('message','Tournaments added successfully!!---');
   		return Redirect::to('/add-event');
   }

   public function edit_event($tournaments_id)
   {
   	return view('admin.edit_event');
   }
}
