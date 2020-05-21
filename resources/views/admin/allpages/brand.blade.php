@extends('admin.layout')
@section('noidung')
<div style="margin-top: 15px">
	<div class="row my-2">
	<div class="col-md-2"><h5>Brands</h5> 
	

	 </div>
	<div class="col-md-2 offset-8"><a href="{{url('admin/brand/addForm')}}" class="btn btn-success">Thêm brand</a></div>
	</div>
				
			</div>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Name</th>
						<th scope="col">From</th>
						<th scope="col">Image</th>
						<th colspan="3">Function</th>
					</tr>
				</thead>
				<tbody>
					@foreach($allBrand as $brand)
					<tr>
						<th scope="row"> {{$brand->id}}</th>
						<td>{{$brand->name}}</td>
						<td>{{$brand->from}}</td>
						<td><img src="../public/img/{{$brand->image}}" width="50px" alt=""></td>
						<td>
							<a href="{{url('admin/brand/editForm').'/'.$brand->id}}" class="btn btn-primary btn-sm">Edit</a>
							<a href="{{url('admin/brand/xoa').'/'.$brand->id}}" class="btn btn-danger btn-sm btn-remove">Xóa</a>
						

						</td>
			
					</tr>
					@endforeach
				</tbody>
			</table>
	@if(session('addok'))
		<input type="text" id='msg' hidden="" value="{{session('addok')}}">
	@endif
	@endsection
	@section('script')
	<script type="text/javascript">
	     $(document).ready(function(){



            if($('#msg').length > 0){
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'info',
                    title: $('#msg').val(),
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            $('.btn-remove').click(function(){
                var redirectUrl = $(this).attr('href');
                Swal.fire({
                    title: 'Thông báo!',
                    text: "Bạn có chắc chắn muốn brand này ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = redirectUrl;
                    }
                })
                return false;
            });
        });
</script>
	@endsection
