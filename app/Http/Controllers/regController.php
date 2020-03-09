<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_admin;
use App\tbl_team;



class regController extends Controller
{
   public function index()
   
   {

   	return view('admin.register.reg');
   }
   public function indexplayer()
   
   {

   	return view('admin.register.regplayer');
   }

   public function save(request $request)
   
   {
      $adminE=new tbl_admin();
      $adminE ->admin_name=$request->fname;
      $adminE ->email=$request->email;
      $adminE ->password=$request->password;
      $adminE ->admin_dept_name=$request->dept_name;
      $adminE ->admin_position=$request->position;
      $adminE ->admin_phn_number=$request->phone_number;

      $adminE ->save();
      return redirect('/reg/save')->with('message','Data insert succesfully.');
   	
   }

    public function x(request $request)
   
   {
      $adminE=new tbl_team();
      $adminE ->even_code=$request->e_c;
      $adminE ->team_name=$request->t_n;
      $adminE ->team_reg=$request->t_r;
      $adminE ->team_captain=$request->c;
      $adminE ->team_players=$request->p;
      $adminE ->email=$request->t_e;
      $adminE ->password=$request->t_p;
     

      $adminE ->save();
      return redirect('/reg/player')->with('message','Data insert succesfully.');
      
   }


}
