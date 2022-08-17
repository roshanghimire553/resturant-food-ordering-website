
<html lang="en">

<head>
    <base href="/public">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- <title>Restaurant</title> -->
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <!-- Bootstrap CSS v5.0.2 -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" >
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="logo me-auto">
        <h1><a href="{{url('/redirects')}}">Restaurant</a></h1>

       </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
         
         
        <li><a class="nav-link scrollto" href="{{url('/redirects')}}">Food</a></li>
          <li>
          
            @auth
            <a style="" class=" img-curve bi bi-cart" href="{{url('/showcart',Auth::user()->id)}}">
          Cart[{{$count}}] 
          </a>
          @endauth
          @guest
          
          Cart[0]
          @endguest
        
        
        </li>

          <li> 
          @if (Route::has('login'))
                <div class="navbar order-last order-lg-0">
                    @auth
                      <li> 

                      <x-app-layout>

                      </x-app-layout>

                      </li>
                    @else
                      <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                         <li>   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif

          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  </main><!-- End #main -->
  <br>
  <br>
   
  <table align="center" bgcolor="wheat">
    	
    	<tr>
    		<th style="padding: 30px;">Food Name</th>
    		<th style="padding: 30px;">Price</th>
    		<th style="padding: 30px;">Quantity</th>
    		<th style="padding: 30px;">Action</th>	
    	</tr>

      
   <form action="{{url('orderconfirm')}}" method="POST" >

      @csrf
      @foreach($data as $data)
      <tr>
          <td class="padding-right:10px;">
          <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
            {{$data->title}}
          </td>
          <td class="">
          <input type="text" name="price[]" value="{{$data->price}}" hidden="">

            {{$data->price}}
          </td>
          <td>
          <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">

            {{$data->quantity}}
          </td>
      </tr>
      @endforeach

      @foreach($data2 as $data2)
      
      <tr style="position: relative; top: -80px; left:360px;">

       <td>
         <a class="btn btn-warning" href="{{url('/remove',$data2->id)}}" >Remove</a>
       </td>

      </tr>
        

      @endforeach
    
  </table>

  <div align="center" style="padding: 10px; " >
    
    <button class="btn btn-primary" style="background-color:orange " type="button" id="order">Order Now</button>
    
    </div>
    
    
    
    
    <div id="appear" align="center" style="padding: 10px; display: none;">
    
    
        <div style="padding: 10px;">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
    
        <div style="padding: 10px;">
            <label>Phone</label>
            <input type="number" name="phone" placeholder="Phone Number">
        </div>
        
        <div style="padding: 10px;">
            <label>Address</label>
            <input type="text" name="address" placeholder="Address">
        </div>
    
    
        <div style="padding: 10px;">
           
            <input class="btn btn-success"style="background-color:orange " type="submit" value="Order Confirm">
    
            <button id="close" type="button" style="background-color:orange "class="btn btn-danger">Close</button>
        </div>
        
    
    </div>
</form>
    <script type="text/javascript">
        
        $("#order").click(

            function()
            {
                $("#appear").show();

            }
            );




        $("#close").click(

            function()
            {
                $("#appear").hide();

            }
            );



    </script>






  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>