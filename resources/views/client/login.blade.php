<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style type="text/css" media="screen">
body {
 background-image: url("https://i.redd.it/y2xq0krki0431.png");
}
</style>
<body>
	<div class="container">
		<header>
			<div class="row">
				<div class="col-md-5 offset-5">
					<div  style="background: black;width: 500px;height: 470px;opacity: 0.5;position: absolute;">
						
					</div>
					<div style="position: relative;color:white;margin-top: 20px">

						@if(session('dksuccess'))
						<h5 style="color:green">{{session('dksuccess')}}</h5>
						@endif
					<h5 style="text-align: center" >Đăng Nhập</h5>
					<div class="offset-1">
			
	
					<form action="{{url('login')}}" method="POST" accept-charset="utf-8">
						<p>Tài khoản
							<input type="text" class="form-control" name="taikhoan">
							@if($errors->has('taikhoan'))
					<p style="color:red">{{$errors->first('taikhoan')}}</p>
					@endif

						</p>
						<p>Mật khẩu
							<input type="password" class="form-control" name="matkhau">
					@if($errors->has('matkhau'))
					<p style="color:red">{{$errors->first('matkhau')}}</p>
					@endif
						</p>
					

						{!! csrf_field() !!}

						<button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
						<hr style="background:white">
						<p> Tạo tài khoản mới? <a href="{{url('register')}}">Tạo </a><p>
					</form>

					</div>
		
				</div>
				</div>
				
			</div>
		</header>
	</div>
</body>
</html>