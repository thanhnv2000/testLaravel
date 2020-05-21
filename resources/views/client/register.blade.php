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
					<div  style="background: black;width: 500px;height: 670px;opacity: 0.5;position: absolute;">
						
					</div>
					<div style="position: relative;color:white;margin-top: 20px">
					<h5 style="text-align: center" >Đăng Ký</h5>
					<div class="offset-1">
			
	
						<form action="{{url('register')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tài khoản</label>
					<input type="text" name="username" class="form-control">
					@if($errors->has('username'))
					<p style="color:red">{{$errors->first('username')}}</p>
					@endif
				</div>
				
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="password" name="password" class="form-control">
					@if($errors->has('password'))
					<p style="color:red">{{$errors->first('password')}}</p>
					@endif
				</div>

				<div class="form-group">
					<label for="">Họ và tên</label>
					<input type="text" name="fullname" class="form-control">
					@if($errors->has('fullname'))
					<p style="color:red">{{$errors->first('fullname')}}</p>
					@endif
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name="email" class="form-control">
					@if($errors->has('email'))
					<p style="color:red">{{$errors->first('email')}}</p>
					@endif
				</div>
				

				<div class="form-group">
					<label for="">Image</label>
					<input type="file" name="file_image" class="form-control">
				</div>

			

				{!! csrf_field() !!}

				<button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
				<p><a href="{{url('login')}}">Đã có tài khoản</a></p>
			</form>

					</div>
		
				</div>
				</div>
				
			</div>
		</header>
	</div>
</body>
</html>