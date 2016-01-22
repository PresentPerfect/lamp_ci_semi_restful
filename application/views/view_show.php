<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Show_Product Page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		a {
			padding: 40px 20px;
		}
	</style>
</head>
<body>
	<div class='container'>
		<h1>Show Products Page</h1>		
		<p>Name:  <?= $product_by_id['name'] ?></p>
		<p>Description: <?= $product_by_id['description'] ?></p>
		<p>Price:  <?= $product_by_id['price'] ?></p>
		<p>
			<a href="/edit/<?= $product_by_id['id'] ?>">Edit</a>|
			<a href="/">Back</a>
		</p>			
	</div>
</body>
</html>