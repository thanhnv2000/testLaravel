@extends('layouts.index')
@section('title')
  <title>Trang chủ</title>
@endsection
@section('noidung')

<!-- SLIDER -->
<section class="slider">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
  
      @foreach($slider as $slider)
      <div class="carousel-item @if ($loop->first) active @endif">
        <img src="{{$slider->image}}" class="d-block w-100" alt="..." height="670px" style="position: relative;">
        <p style="position: absolute; color: white;margin-top: -500px;margin-left: 100px;font-size: 25px;">{{$slider->title}}</p>
      </div>
      @endforeach
     {{--  <div class="carousel-item">
        <img src="https://dummyimage.com/1900x870/000/fff" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://dummyimage.com/1900x870/000/fff" class="d-block w-100" alt="...">
      </div> --}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




</section>


<!-- COLLECTION -->  <div class="container border-bottom">
  <section class="collections py-5 ">

   <div class="row">
    


    @foreach($image3 as $image)
     <div class="col">
       <img src="../public/img/{{$image->image}}" class="d-block w-100" width="360px" height="258" alt="...">
     </div>
    @endforeach


   </div>
 </section>
</div>


<!-- PRODUCT -->


<section class="product py-5 my-5">
  <div class="container">
    <div class="product-header">
      <h5 class="text-center">FEATURED PRODUCT</h5>
      <p class="text-center col-md-8 m-auto ">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
      six seven eight Sclemeel schlemazel hasenfeffer incorporated.</p>
    </div>

    <div class="product-body pt-5">
      <div class="row">
        <div class="col-lg-6 pr-2">
          @for( $i = 0; $i <= count($image4)-3 ; $i++)
          <img src="../public/img/{{$image4[$i]->image}}" class="d-block w-100 mt-2" alt="...">
          @endfor
        {{--   <img src="https://dummyimage.com/590x443/000/fff" class="d-block w-100 mt-2" alt="..."> --}}
        </div>  

        <div class="col-lg-6 pr-2">
         @for( $i = 2; $i < count($image4) ; $i++)
          <img src="../public/img/{{$image4[$i]->image}}" class="d-block w-100 mt-2" alt="..." >
          @endfor
   {{--        <img src="https://dummyimage.com/590x330/000/fff" class="d-block w-100 mt-2" alt="..."> --}}
        </div>
      </div>
    </div>
  </div>
</section>



<!--  BRAND -->
<div class="container bg-light ">
  <section class="brand py-5 m-auto text-center">
    <h5 class="text-center">WE OFFER A BRAND NEW FASHION</h5>
    <p class="text-center py-4">SIGN UP NOW & GRAB 30% OFF</p>
    <button type="button" class="btn btn-outline-dark  my-1">SIGN UP NOW </button>


  </div>

</div>
</section>

<!--  FRESH-ARIAVALS -->
<section class="fresh-arrivals py-5" >
  <div class="arrivals-header text-center">

    <h5 class="py-4">FRESH ARRIVALS</h5>
    <p class="col-md-7  m-auto">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
    six seven eight Sclemeel schlemazel hasenfeffer incorporated.</p>

  </div>




  <div class="container py-5">
    <div class="arriavals-body text-center">


      <!-- Nav tabs -->
{{--       <ul class="nav nav-tabs justify-content-center">
          @foreach($allBrands as $brand)
        
        <li class="nav-item px-2">
          <a class="nav-link" data-toggle="tab" href="#hangxe{{$brand->id}}">{{$brand->name}}</a>
        </li>
        @endforeach
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

     @foreach($allBrands as $brand)
        <div class="tab-pane container" id="hangxe{{$brand->id}}">

          <div class="row mt-5">
           
            @foreach($allCar as $car)
            @if($car->id_brand == $brand->id)
           <div class="col-md-4 mt-2">
             <img src="../public/img/{{$car->image_feature}}" class="d-block w-100" width="190px" height="200px" alt="...">
             <h5 class="pt-2">{{$car->name}}</h5>
             <p>Casual</p>
             <h5>{{$car->price}} USD</h5>
              
           </div>
           @endif
           @endforeach
         </div>
       </div>

      @endforeach
 --}}

        <div class="row mt-5">
           
            @foreach($allCar as $car)
       
           <div class="col-md-4 mt-2">
             <img src="../public/img/{{$car->image_feature}}" class="d-block w-100" width="190px" height="200px" alt="...">
             <h5 class="pt-2">{{$car->name}}</h5>
             <p>Hãng: {{$car->getBrands->name}}</p>
             <h5>{{$car->price}} USD</h5>
              
           </div>
       
           @endforeach
         </div>




 </div>
</div>
</div>





</div>

<div class="arriavals-footer text-center">
 {{--  <button type="button" class="btn btn-outline-dark  px-5">VIEW ALL PRODUCTS </button> --}}
 <div class=" " style="margin-left: 700px">{!! $allCar->links()!!}</div>
</div>

</section>






<!--  TESTIMOINALS -->


<div class="container border-top pt-5">
                <section class="testimonials ">

                  <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active text-center">

                        <h5 class="mt-4 d-block w-100">TESTIMOINALS</h5>
                        <span class="border-bottom ">__________</span>
                      </br></br>

                      <img src="https://dummyimage.com/70x70/000/fff" alt="..." class="rounded-circle ">

                      <p>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>

                     </p>
                     <p class="col-md-9  m-auto pb-3">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
                       six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper too will
                     do their very best to make the others comfortable in their tropic island nest</p>

                     <p><b>STUART MARSH</b></p>
                     <p><i>Content Writer</i></p>

                   </div>
                   <div class="carousel-item text-center">


                    
                        <h5 class="mt-4 ">TESTIMOINALS</h5>
                        <span class="border-bottom ">__________</span>
                      </br></br>

                      <img src="https://dummyimage.com/70x70/000/fff" alt="..." class="rounded-circle">

                      <p>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>

                     </p>
                     <p class="col-md-9  m-auto pb-3">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
                       six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper too will
                     do their very best to make the others comfortable in their tropic island nest</p>

                     <p><b>STUART MARSH</b></p>
                     <p><i>Content Writer</i></p>





                  </div>
                  <div class="carousel-item text-center">
                        
                        
                         <h5 class="mt-4 ">TESTIMOINALS</h5>
                        <span class="border-bottom ">__________</span>
                      </br></br>

                      <img src="https://dummyimage.com/70x70/000/fff" alt="..." class="rounded-circle">

                      <p>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>

                     </p>
                     <p class="col-md-9  m-auto pb-3">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
                       six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper too will
                     do their very best to make the others comfortable in their tropic island nest</p>

                     <p><b>STUART MARSH</b></p>
                     <p><i>Content Writer</i></p>



                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                  <span class="far fa-caret-square-left" aria-hidden="true" style='font-size:24px;color:black'></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                  <span class="far fa-caret-square-right" aria-hidden="true" style='font-size:24px;color:black'></span>
       <!--            <i class='far fa-caret-square-left' style='font-size:24px'></i> -->
                  <span class="sr-only">Next</span>
                </a>
              </div>

              </section>
</div>






<!-- LASTST -->

<section class="lastst">
  <div class="container" style="height:800px">
  <div class="lastst-header my-3 text-center">
      
      <h5 class="pt-5">LATEST NEWS</h5>
      <p>________</p>
      <p class="col-md-9 m-auto">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
    six seven eight Sclemeel schlemazel hasenfeffer incorporated</p>

  </div>

  <div class="lastst-body mb-4">

    <div class="row col-fresh">
    
    @foreach($news2 as $news)
      <div class="col-md-6 bg-light">
            <p class="mt-4 ml-5 absolute bg-dark col-md-1 pr-5 text-center color-white "><b>&nbsp;11 JAN</b></p>
                <img src="{{$news->image_feature}}" class="d-block w-100" alt="..." height="300px">
            <div class="col-md-9 border px-5" style="position: absolute;margin-top: -50px;margin-left: 60px;">
              <h6 class="pt-5 font-weight-bold"></br>{{$news->title}}</h6>
              <p>{{$news->short_description}}
              </br> </br>
              <a href="#"><b>READ MORE </b></a>
              </p>
            </br>
            </div>
      </div>
     @endforeach 


    </div>

  </div>

  </div>
</section>



<!--  SUBSCRIBE -->
<section class="subscribe mb-5">
    <div class="container m-auto text-center">
      <h5 class="pt-5 ">SUBSCRIBE TO OUR NEWSLETTS</h5>
      <p class="py-2">Be the First to know about our Fresh Arrivals and much more!</p>   
      <div class="input-group mb-3 col-md-9 m-auto">
        <input type="text" class="form-control" placeholder="Enter your Email id" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-dark px-5" type="button" id="button-addon2">SUBSCRIBE</button>
        </div>
      </div> 
    </div>

</section>
@endsection