<?php
	require_once ('database.php');
	if (!empty($_POST)) {
	 	$Name = $_POST['Name'];
	 	$Email = $_POST['Email'];
	 	$Password = $_POST['Password'];

	 	if ($Name != "" && $Password != "") {
	 		$query ='insert into  student(username,email,password) values("'.$Name.'","'.$Email.'","'.$Password.'")';
	 		query($query);
	 	}
	 } 
 ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.container-fluid {
	    border: 1px solid;
	    padding: 30px;
	    margin-top: 50px;
	}
	.container{
	    border: 1px solid;
	    padding: 30px;
	    margin-top: 50px;
	}
	h1 {
    text-align: center;
	}
	.panel-body {
	    margin: 0px 50px 0px 50px;
	}
	div>h2 {
    background-color: aqua;  
    margin: -30px -15px 0px -15px;
    text-align: center;
	}
	</style>
	<title>Input Default Information</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Welcome to PHP tutorial</h1>	
<div class="container-fluid">
  <h2>Management</h2>        
  <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
<?php
$query  = 'select * from student';
$result = select($query);

for ($i = 0; $i < count($result); $i++) {
	echo '<tr>
				<td>'.($i+1).'</td>
				<td>'.$result[$i]['username'].'</td>
				<td>'.$result[$i]['email'].'</td>
				<td>'.$result[$i]['password'].'</td>
			</tr>';
}
?>
  </table>
</div>
<div class="container" >
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center"> Input Default Information</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="">
					<div class="form-group">
					  <label for="usr">User Name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="Name">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="Email">
					</div>			
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="Password">
					</div>					
					<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
    <?php
	const HOST = 'localhost';
	const USERNAME = 'root';
	const PASSWORD = '';
	const DATABASE = 'qlsvphp';
?>
<?php
require_once ('config.php');

function query($query) {
	//tao ket noi toi database
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf-8');

	mysqli_query($conn, $query);

	//dong ket noi
	$conn->close();
}
?>
<?php
function select($query) {
	//tao ket noi toi database
	$conn = new mysqli('localhost', 'root', '', 'qlsvphp');
	mysqli_set_charset($conn, 'utf-8');

	//thuc hien cac cau truy van
	//select
	// $cusor = $conn->query($query);
	$cusor  = mysqli_query($conn, $query);
	$result = [];
	while ($row = mysqli_fetch_array($cusor, 1)) {
		$result[] = $row;
	}
	//dong ket noi
	$conn->close();
	return $result;
}
?>
</body>
</html>