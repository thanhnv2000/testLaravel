<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;

use App\User;
class RegisterController extends Controller
{


  public function __construct(User $user) 
  {
    $this->user = $user;
  }


       public function getRegister(){
           return view('client/register');
  	  }



  	  public function postRegister(Request $request){
  	  	$rules = [
  	  		'username'=>'required',
  	  		'password'=>'required',
  	  		'fullname'=>'required',
  	  		'email'=>'required'
  	  	];
  	  	$messages = [
  	  		'taikhoan.required' => 'Tài khoản không được để trống',
  	  		'matkhau.required' => 'Mật khẩu không được để trống',
  	  		// 'matkhau.size' => 'Mật khẩu quá ngắn',
  	  		'fullname.required' => 'Hãy nhập họ tên',
  	  		'email.required' => ' Hãy nhập Email'
  	  	];

  	  	$validator = Validator::make($request->all(), $rules, $messages);

 		if ($validator->fails()) {
          	return redirect()->back()->withErrors($validator);
         }else {
  	  		$username = $request->username;
  	  		$password = $request->password;
  	  		$fullname = $request->fullname;
  	  		$email = $request->email;
          $name_anh = '';
          if ($request->hasFile('file_image')) {
            $file_image = $request->file('file_image');
            // Kiem tra duoi file co phai png|jpg hay ko
            $duoifile = $file_image->getClientOriginalExtension('file_image');
            if( $duoifile =='jpg' || $duoifile == 'png'){
                $name_anh = $file_image->getClientOriginalName('file_image');
                $file_image->move('img',$name_anh);
            }
          };

  	  		$this->user->insert([
  	  			'username'=>$username,
  	  			'password'=>Hash::make($password),
  	  			'fullname'=>$fullname,
  	  			'email'=>$email,
            'avatar'=>$name_anh,
  	  			'remember_token'=>$request->_token
  	  		]);

  	  		return redirect('login')->with('dksuccess','Đã tạo tài khoản thành công');

  	  	}
}
}