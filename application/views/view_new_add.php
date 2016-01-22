<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View New_Add Product Page</title>
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
		<h1>Add a New Product</h1>
		<form action='add_product' method='post'>
			<div class='form-group'>
				<label for='name'>Name:</label>
				<input class='form-control' type='text' name='name'>
			</div>
			<div class='form-group'>
				<label for='description'>Description:</label>
				<input class='form-control' type='text' name='description'>
			</div>
			<div class='form-group'>
				<label for='price'>Price:</label>
				<input class='form-control' type='text' name='price'>
			</div>
			<button class='btn btn-primary' type='submit'>Create</button>
		</form>
		<p>
			<a href="/">Go Back</a>
		</p>

	</div>
</body>
</html>