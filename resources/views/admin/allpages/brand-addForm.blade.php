@extends('admin.layout')
@section('noidung')
<div style="margin-top: 15px">
	<h5>Brand/Add Form</h5>
	</div>
	<div class="col-md-5 pt-5">
		<form id='add-brand-form' action="{{url('admin/brand/add_brand')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label>From:</label>
				<input type="text" name="from" class="form-control">
			</div>


			<div class="form-group">
				<label>Image:</label>
				<input type="file" name="file_image" class="form-control">
			</div>

				{!! csrf_field() !!}

			<button type="submit" class="btn btn-primary float-right">Add</button>
			
		</form>
	</div>@endsection
@section('script')
	<script type="text/javascript">
		    $(document).ready(function(){

    		$("#add-brand-form").validate({

    			rules: {
    				name: {
    					required: true,
                        rangelength:[4,100],
                        remote:
                        {
                            url: "<?= url('admin/brand/check-brand-name')?>",
                            type: "post",
                            data:
                                {
                                    name: function()
                                    {
                                        return $('#add-brand-form :input[name="name"]').val();
                                    },_token: '{{csrf_token()}}',
                         
                                },
                        },
    				},
                    from: {
                        required: true,
                     
                    },
                    image: {
                        extension: "jpg|png",
                    },
           



    			},

    			messages:{
                     name:
                     {
                     required: "Hãy nhập tên sản phẩm",
                     rangelength: " Độ dài từ 4 kí tự trở lên",
                     remote: "Tên brand đã tồn tại",
                     },

                     from:{
                     required: "Hãy nhập from",  
   
                    },
                       image: {
                        extension: 'Phải có đuôi là định dạng ảnh (jpg, png)',
                    }
   

    			}


    		});
    });

	</script>

@endsection

