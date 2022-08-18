<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function dashboard(){
        return view ('backend.home');
    }
    public function login(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('admin')->where("admin_email","=",$admin_email)->where("admin_password","=",$admin_password)->first();
        
        if($result){
            Session::put('admin_email', $result->admin_email);
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message','Nhập sai thông tin, mời nhập lại');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_email',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
