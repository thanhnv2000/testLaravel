<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Admin</title>
	<link rel="stylesheet" href="">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
.thanhbar{background;width: 100%;height: 70px;     -webkit-box-shadow: 0 8px 6px -6px black;
       -moz-box-shadow: 0 9px 6px -6px gray;
            box-shadow: 0 8px 6px -6px gray;}
.menu{height: 700px;background: #32383e}
</style>
</head>

<body>
	<div class="thanhbar">
		<div class="row">
			<div class="col-md-2">
				<img src="https://logomaster.ai/static/media/sample.c8bf2b04.svg" height="60px" alt=""
				style="margin-left: 50px">
			</div>
			<div class="col-md-2 offset-8">
					<div class="dropdown">
					<button class="btn btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 13px">
							<img src="{{asset('img/'.Auth::user()->avatar)}}" width="60px" height="40px" alt="" style="border-radius: 100px">
						@if(Auth::check()){{Auth::user()->fullname}} @endif
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="font-size: 13px">
					<a href="{{url('logout')}}" class="btn"> Đăng xuất</a>
					</div>


				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<div class="menu">

				<div class="ml-3 pt-5">
					<a href="{{url('admin/')}}" class="btn" style="color:white">Brand</a></br>
					<a href="{{url('admin/cars')}}" class="btn" style="color:white">Car</a></br>
					<a href="{{url('admin/users')}}" class="btn" style="color:white">User</a></br>
				</div>		


			</div>
		</div>
		<div class="col-md-10" style="">

			@yield('noidung')


			
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>

   	


   	@yield('script')



</body>
</html>