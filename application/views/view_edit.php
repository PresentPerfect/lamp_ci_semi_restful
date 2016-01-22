<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Edit_Product Page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		.container {
			margin: 20px;
			padding: 20px;
			width: 500px;
		}
		p {
			margin-top: 20px;
		}
		p a {
			margin: 0px;
			padding: 20px 20px;
		}
	</style>
</head>
<body>
	<div class='container'>
		<h1>Edit Product #<?= $product_by_id['id'] ?></h1>
		<form action='/update' method='post'>
			<input type='hidden' name='id' value='<?= $product_by_id['id'] ?>'>
			<div class='form-group'>
				<label for='name'>Name:</label>
				<input class='form-control' type='text' name='name' value="<?= $product_by_id['name']; ?>">
			</div>
			<div class='form-group'>
				<label for='description'>Description:</label>
				<input class='form-control' type='text' name='description' value="<?= $product_by_id['description']; ?>">
			</div>
			<div class='form-group'>
				<label for='price'>Price:</label>
				<input class='form-control' type='text' name='price' value="<?= $product_by_id['price']; ?>">
			</div>
			<button class='btn btn-primary' type='submit'>Update</button>
		</form>
		<p>
			<a href="/show/<?= $product_by_id['id'] ?>">Show</a>|
			<a href="/">Back</a>
		</p>
	</div>
</body>
</html>