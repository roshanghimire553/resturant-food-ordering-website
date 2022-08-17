<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")


    


  	<div style="position: relative; top: 60px; right: -150px">

    
  		
  		<form  action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

  			@csrf

  			<div>
  				<label>Title</label>
  				<input style="color:blue;" type="text" name="title" placeholder="Write a title" required>
  			</div>

  			<div>
  				<label>Price</label>
  				<input style="color:blue;" type="num" name="price" placeholder="price" required>
  			</div>

  			<div>
  				<label>Image</label>
  				<input type="file" name="image"  required>
  			</div>

  			<div>
  				<label>Description</label>
  				<input style="color:blue;" type="text" name="description" placeholder="Description" required>
  			</div>

  			<div>
  				
  				<input style="color:yellow" type="submit" value="Save" >
  			</div>

  		</form>
      
    <div>
            <table BGcolor="black" style="height:900px;">
                <tr >
                    <th style="padding: 5px">Food Name</th>
                    <th style="padding:30px">Price</th>
                    <th style="padding:30px">Description</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action</th>
                    <th style="padding:30px">Action 2</th>

                </tr>


                @foreach($data as $data)
                <tr allign="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td style="padding:20px">{{$data->description}}</td>
                    <td><img height="70" width="70" src="/foodimage/{{$data->image}}"></td>
                    <td style="padding:20px"><a href="{{url('/deletefood',$data->id)}}">Delete</a></td>
                    <td style="padding:20px"><a href="{{url('/updateview',$data->id)}}">Update</a></td>

                 </tr>
                @endforeach


           </table>

  </div>

   @include("admin.adminscript")


  </body>
</html>