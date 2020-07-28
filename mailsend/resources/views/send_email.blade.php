<!DOCTYPE html>
<html>
<head>
	<title>Send email </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container box">

		@if(count($errors) > 0 )
           <div class="alert alert-danger">
           	<button type="button" class="close" data-dismiss="alert">x</button>
           	<ul>@foreach($errors->all() as $error)

           		<li>{{ $error }}</li>
             @endforeach
           	</ul>
           </div> 

		 @endif

		 @if($message = Session::get('success'))

		   <div class="alert alert-sucess alert-block">
		   	<button type="button" class="close" data-dismiss="alert">x</button>
		   	<strong>{{ $message }}</strong>
		   </div>

		 @endif
		<form method="post" action="{{ url ('sendemail/send') }}">
			@csrf
			
			<div class="form-group">
				<label>Enter your name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
			<label>Enter your email</label>
			<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Enter your message</label>
				<textarea name="message" class="form-control"></textarea>
			</div> 
			<div class="form-group">
				<input type="submit" name="send" value="send" class="btn btn-info"/>
			</div>

		</form>
	</div>

</body>
</html>