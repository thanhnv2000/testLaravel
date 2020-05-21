<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table ='cars';
    public  $timestamps=false;
    // protected $fillable = [
    //     'username','password','fullname','avatar','email'
    // ];
    public function getBrands(){

  		return $this->belongsTo('App\Brands','id_brand', 'id');
    }
}
