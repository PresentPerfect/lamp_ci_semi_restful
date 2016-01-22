<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Product Page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		table a {
			padding: 0px 20px;
		}
	</style>
</head>
<body>
	<div class='container'>
		<h1>Products</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
<?php   		foreach($all_products as $product)
				{
?>
				<tr>
					<td><?= $product['name'] ?></td>
					<td><?= $product['description'] ?></td>
					<td><?= $product['price'] ?></td>
					<td>
						<a href="/show/<?= $product['id'] ?>">Show</a>|
						<a href="/edit/<?= $product['id'] ?>">Edit</a>|
						<a href="/delete/<?= $product['id'] ?>"><button class="btn btn-danger">Remove</button></a>
					</td>
				</tr>
<?php			}
?>
			</tbody>
		</table>
		<a href="new_add"><b>Add a new product<b></a>
	</div>
</body>
</html>