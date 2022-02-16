<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Client Create</title>
</head>
<body>
	<div class='container'>
		<?php
			$this->view('shared/clock');
		?>

	<h1>Create a client</h1>
	<p>Please enter the details of the client that you want to create.</p>
	<form method='post' action=''>
		<label class='form-label'>First name:<input type='text' name='first_name' class='form-control' /></label><br>
		<label class='form-label'>Last name:<input type='text' name='last_name' class='form-control' /></label><br>
		<label class='form-label'>Notes:<textarea name='notes' class='form-control'></textarea></label><br>
		<label class='form-label'>Phone:<input type='text' name='phone' class='form-control' /></label><br>
		<input type="submit" name='action' value='Create!' class='form-control' />
	</form>
		<?php
			$this->view('shared/navigation');
		?>
	</div>
</body>
</html>