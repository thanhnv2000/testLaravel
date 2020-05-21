<header>
    <div class="container">
      <div class="header-top border-bottom py-5">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col col-lg-3">
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>

              </ul>
            </div>
            <div class="col col-lg-3 mt-1 text-center font-weight-bold">
              VOLTA
            </div>


            <div class="col col-lg-3 my-1 d-flex ">





             <div class="input-group mb-3">

                @php
                if (Auth::check()) {
                 echo 'Chao ban : '.Auth::user()->fullname;
                }
                @endphp
      {{--         <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary fas fa-search " type="button" id="button-addon2"></button>
              </div> --}}
            </div>
<!-- class='fas fa-search' style='font-size:24px' -->

          </div>
        </div>

      </div>

    </div>


  </div>
  <div class="menu">


    <nav class="navbar navbar-expand-lg navbar-light  ">
      <!--   <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown" >
        <ul class="navbar-nav">
          <li class="nav-item active border-right px-2">
            <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown border-right px-2">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SHOP
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">PORTFOLIO</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item border-right px-2">
            <a class="nav-link" href="#">PORTFOLIO</a>
          </li>

          <li class="nav-item dropdown border-right px-2">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             PAGE
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item border-right px-2">
          <a class="nav-link" href="#">BLOG</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="#">CONTACT</a>
        </li>          


      </ul>
    </div>
  </nav>


</div>
</div>
</header>