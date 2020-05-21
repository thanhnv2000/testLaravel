@extends('admin.layout')
@section('noidung')

<div style="margin-top: 15px">
	<h5>Brand/Edit Form</h5>
	</div>
	<div class="row">
	<div class="col-md-5 pt-5">
		<form id='edit-brand-form' action="{{url('admin/brand/edit_brand')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="text" name="id" value="{{$thisBrand->id}}" hidden="" class="form-control">
				<input type="text" name="id_check" hidden="" value="{{$thisBrand->id}}" class="form-control">
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" value="{{$thisBrand->name}}" class="form-control">
			</div>

			<div class="form-group">
				<label>From:</label>
				<input type="text" name="from" value="{{$thisBrand->from}}" class="form-control">
			</div>


			<div class="form-group">
				<label>Image:</label>
				<input type="file" name="file_image" onchange="encodeImageFileAsURL(this)" class="form-control">
			</div>

				{!! csrf_field() !!}

			<button type="submit" class="btn btn-primary float-right">Add</button>
			
		</form>
	</div>

	<div class="col-md-4">
		<img id="preview-img"  src="<?= asset('img/'.$thisBrand->image)?>" alt="" width="500px">
	</div>
</div>

	<script type="text/javascript">
		 function encodeImageFileAsURL(element) {
        // console.log(element);
        var file = element.files[0];
        if(file === undefined){
            $('#preview-img').attr('src', "<?= asset('img/noIamge.png')?>");
        }else{
            var reader = new FileReader();
            reader.onloadend = function() {
                $('#preview-img').attr('src', reader.result);
                // console.log('RESULT', reader.result)
            }
            reader.readAsDataURL(file);
        }
    }

	</script>
@endsection

@section('script')
	<script type="text/javascript">
		    $(document).ready(function(){

    		$("#edit-brand-form").validate({

    			rules: {
    				name: {
    					required: true,
                        rangelength:[4,100],
                        remote:
                        {
                            url: "<?= url('admin/brand/check-brand-name') ?>",
                            type: "post",
                            data:
                                {
                                    name: function()
                                    {
                                        return $('#edit-brand-form :input[name="name"]').val();
                                    },
                                     id_check: function () {
                                     return $('#edit-brand-form :input[name="id_check"]').val();
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