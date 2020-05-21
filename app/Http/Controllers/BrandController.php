<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Brands;
class BrandController extends Controller
{
	private $brands;
	public function __construct(Brands $brands) 
    {
      $this->brands = $brands;
    }

	public function index(){
		$allBrand = $this->brands::all();
		return view('admin/allpages.brand',['allBrand'=>$allBrand]);
	}
	public function addForm(){
		return view('admin/allpages.brand-addForm');
	}
	public function editForm($id){
		$thisBrand = $this->brands::find($id);
		return view('admin/allpages.brand-editForm',['thisBrand'=>$thisBrand]);
	}

	public function add(Request $request){
		 $model = new Brands();
		 $model->fill($request->all());
		 // if ($request->hasFile('file_image')) {
		 	$request->file('file_image')->store('img','public');
		 // };
	;
		 // $name_anh = $request->file_image->getClientOriginalName('file_image');
		 // $model->image = $name_anh;
		 // $run = $model->save() ;
		 // if ($run == true) {
		 // 		return redirect('admin/')->with('addok','Đã tạo Brand thành công');
		 // }else {
		 // 	return redirect('admin/')->with('addok','Lỗi');
		 // }

		// $this->brands->insert([
  // 	  			'name'=>$name,
  // 	  			'from'=>$from,
  // 	  			'image'=>$name_anh
  // 	  		]);

  // 	  	return redirect('admin/')->with('addok','Đã tạo Brand thành công');

	}
	public function edit(Request $request){
			  $id = $request->id;
		      $model = $this->brands::find($id);
		      $model->fill($request->all());
		      $image = img_Upload($request->file_image);
		      if ($image != null) {
		      	 $model->image = $image;
		      }
		      $run = $model->save();
		       if ($run == true) {
		 		return redirect('admin/')->with('addok','Đã sửa Brand thành công');
				}else {
				 	return redirect('admin/')->with('addok','Lỗi');
				}
	}

	public function checkName(){
		 $name = trim($_POST['name']);
      	  $id = isset($_POST['id_check']) ? $_POST['id_check'] : null;
        if($id){
            $existed = $this->brands::where('name', $name)
                                ->where('id', '!=', $id)
                                ->count();
        }else{
            $existed = $this->brands::where('name', $name)->count();
        }
        echo $existed == 0 ? "true" : "false";
	}



	public function remove($id){
		$this->brands->where('id',$id)->delete();
		return redirect()->back();
	}
}
