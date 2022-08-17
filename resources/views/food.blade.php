

<body>
  

  
      <!-- fOOD list Section Starts Here -->
      <section class="food-menu" id="food">
        <div class="container">
            <h5 class="text-center" style="font-size: 30px;">Food List</h5>
         @foreach($data as $data)
            <div class="food-menu-box">
                <div class="food-menu-img">
                <img src="foodimage/{{$data->image}}" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                   
                  </div>

                <div class="food-menu-desc">
                   <div class="title"> <h4>{{$data->title}}</h4></div>
                    <div class="price"><h4>price:Rs{{$data->price}}</h6></div>
                    <p class="description">{{$data->description}}</p>
                    <!-- <a href="order.php" class="btn btn-primary">Order Now</a>
                    -->
                </div>
                <form action="{{url('/addcart',$data->id)}}" method="post">
                  @csrf

                  <input type="number" name="quantity" min="1" value="1" style="width:70px; height: 35px;">
                  <input class=" btn btn-primary" type="submit" value="add cart">
               </form>
                
            </div>
           
               @endforeach
               <div class="clearfix"></div>

          
        </div>


    </section>
    <!-- fOOD list Section Ends Here -->
  

  
  </body>
  
