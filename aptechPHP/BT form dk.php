<!DOCTYPE html>
<html>
<head>
	<title>Form đăng ký tài khoản bằng PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body>
	<div class="container">		
		<div class="card border-primary">
			<div class="card-header bg-primary" style="height: 50px; color: white ">
				Input detail infomation
			</div>

			<div class="card-body">
				<form method="post" action="welcome.php">
					<div class="form-group">
						<label>User Name</label>								  	
				        <input required="true" type="text" name="username" class="form-control" >
					</div>

					<div class="form-group">
						<label>Email</label>								  	
				        <input required="true" type="text" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>								  	
				        <input required="true" type="password" name="paw" class="form-control">
					</div>
					<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div> 
	</div>
</body>
</html>