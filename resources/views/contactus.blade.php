<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactUs</title>


    <!-- CSS File -->
  <link href="assets/css/login.css" rel="stylesheet">
  <!-- Bootstrap CSS v5.0.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <!--Fontawesome CDN-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Contact Us</h3>
			</div>
			<div class="card-body">
				<form action="{{url('/message')}}" method="post">
						@csrf
						            @if(Session::has('fail'))
									 <div class="alert alert-danger">
										{{Session::get('fail')}}
									  </div>
									@endif
						            <div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa-solid fa-users"></i></span>
										</div>
										<input type="txt" class="form-control" placeholder="Full Name" name="name">
										
									</div>
									<span class="text-danger">
					             		@error('name')
										{{$message}}
										@enderror
									</span>
								

									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
										</div>
										<input type="email" class="form-control" placeholder="Email" name="email">
										
									</div>
									<span class="text-danger">
					             		@error('email')
										{{$message}}
										@enderror
									</span>
								
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa-solid fa-pen"></i></span>
										</div>
										<input type="txt" class="form-control" placeholder="Subject" name="subject" >
										
									</div>
						<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa-solid fa-message"></i></span>
										</div>
							
							<textarea type="txt" class="form-control" placeholder="Message" name="message">
						</textarea>
										
									</div>
									<div class="form-group py-5">
										<button  class="btn float-right login_btn" style="background-color:orange">
											Send 
							</button>

									</div>
						</div>
			</form>
		</div>
	</div>
</div>
</body>

</html>