<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\User;
class LoginController extends Controller
{

    private $user;
    private $category;

    public function __construct(User $user) 
    {
      $this->user = $user;
    }
     public function getLogin(){
        return view('client/login');
        $all = $this->user::all();
        var_dump($all);
  	  }

     public function postLogin(Request $request){
          $rules = [
          	'taikhoan'=>'required',
          	'matkhau'=>'required'
          ];
          $messages = [
          	'taikhoan.required' => 'Tài khoản không được để trống',
          	'matkhau.required' => 'Mật khẩu không được để trống'

          ];

          $validator = Validator::make($request->all(), $rules, $messages);



          if ($validator->fails()) {
          	return redirect()->back()->withErrors($validator);
          }else {
          	$tk = $request->taikhoan;
          	$mk = $request->matkhau;
          	if (Auth::attempt(['username'=>$tk,'password'=>$mk])) {
          		 return redirect()->route('home');
          	}else {
          		return redirect()->back();
          	}
          }
  	  }

  	  public function logout(){
  	  	Auth::logout();
  	  	return redirect('login');
  	  }

}
