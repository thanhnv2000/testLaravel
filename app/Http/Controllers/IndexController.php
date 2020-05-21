<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Brands;
use App\Slider;
use App\Images;
use App\News;
class IndexController extends Controller
{
	private $cars;
	private $brands;
	private $slider;
	private $images;
	private $news;
	public function __construct(Cars $cars, Brands $brands, Slider $slider, Images $images, News $news) 
    {
      $this->cars = $cars;
      $this->brands = $brands;
      $this->slider = $slider;
      $this->images = $images;
      $this->news = $news;
    }

    function home(){
    	
            $allCar = $this->cars::with('getBrands')->paginate(3);
          // $allCar = $this->cars::paginate(3);


    	$allBrands = $this->brands::all();
    	$Allslider = $this->slider::all();
    	$image3 = $this->images->inRandomOrder()->take(3)->get();
    	$image4 = $this->images->inRandomOrder()->take(4)->get();
    	$news2 = $this->news->take(2)->get();
    	return view('client/index',[
    		'allCar'=>$allCar,
    		'allBrands'=>$allBrands,
    		'slider'=>$Allslider,
    		'image3'=>$image3,
    		'news2'=>$news2,
    		'image4'=>$image4,
    	]);
    }
}
