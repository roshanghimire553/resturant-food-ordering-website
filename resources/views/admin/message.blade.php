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

   
<div class="container">

  


  	<table>




  		
  		 <tr align="center">  
       
             <th style="padding: 30px;">Name</th>
             <th style="padding: 30px;">Email</th>
             <th style="padding: 30px;">Subject</th>
             <th style="padding: 30px;">Message</th>
             <th style="padding: 30px;">Created At</th>
             <th style="padding: 50px;">Updated At</th>
             <th style="padding: 30px;">Action</th>

             

  		 </tr>



          @foreach ($data as $data)
        <tr align="center" style="background-color: black;">
          
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->subject}}</td>
          <td>{{$data->message}}</td>
          <td>{{$data->created_at}}</td>
          <td>{{$data->updated_at}}</td>
			<td><a href="{{url('/deletemessage',$data->id)}}">Delete</a></td>


        </tr>
        @endforeach



  	</table>

  </div>
</div>
  
  

   @include("admin.adminscript")


  </body>
</html>




