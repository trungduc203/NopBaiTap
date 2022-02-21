<!DOCTYPE html>
<html>
<head>
	<title>Hiển thị ngẫu nhiên N quyển sách bằng PHP - Quản lý sách bằng PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$N = rand(1,100);
$QuyenSach= [];

for ($i=0; $i <= $N ; $i++) 
{
	$QuyenSach[] =[
		'title' => 'quyển sách'.$i,
		'authorname' => 'tác giả'.$i,
		'price' => rand(1,100),
		'nsx' => 'nhà xuất bản'.$i,
		
	];
}
?>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Author Name</th>
				<th>Price</th>
				<th>NSX</th>				
			</tr>
		</thead>
		<tbody>
<?php
$count = 0;
foreach ($QuyenSach as $item) {
	echo '<tr>
				<td>'.(++$count).'</td>
				<td>'.$item['title'].'</td>
				<td>'.$item['authorname'].''.'</td>
				<td>'.$item['price'].'</td>
				<td>'.$item['nsx'].'</td>			
			</tr>';
}
?>
</tbody>
	</table>
</div>

</body>
</html>