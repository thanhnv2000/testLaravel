<?php 
define("BASE_URL","http://localhost/Laravel-home/newpro/public/");
define("ADMIN_URL", BASE_URL."admin/");

function img_Upload($file){
	
          if ($file != null) {
            // $duoifile = $file->getClientOriginalExtension('file_image');
            // if( $duoifile =='jpg' || $duoifile == 'png'){
                $name_anh = $file->getClientOriginalName('file_image');
                $file->move('img',$name_anh);
                return $name_anh;
            	// }
       		 }
        return null;
    }

 ?>
