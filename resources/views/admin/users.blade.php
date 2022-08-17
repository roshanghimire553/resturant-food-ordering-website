<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
	    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
   @include("admin.admincss")
   
  </head>
  <body>
    
    <div class="container-scroller">
     
  	@include("admin.navbar")



  	<div  style="container " >

	  <table class="table  table-hover  table-bordered">
    <thead class="bg-white text-black text-center">
      <tr>  
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">Action</th>

      </tr>
	  @foreach($data as $data)
  			<tr align="center">
  				<td>{{$data->name}}</td>
  				<td>{{$data->email}}</td>
			    <td>{{$data->created_at}}</td>
				<td>{{$data->updated_at}}</td>

  				@if($data->usertype=="0")
  				<td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
  				@else
  				<td><a >Not Allowed</a></td>

  				@endif
  			</tr>

  			@endforeach

    </thead>
  </table>


  	</div>

   </div>

   @include("admin.adminscript")


  </body>
</html>


</body>
</html>