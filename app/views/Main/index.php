<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Landing page</title>
</head>
<body>
	<div class='container'>
		<?php
			$this->view('shared/clock');
		?>


		This is a password hash for the word password: 
		<?= password_hash('password', PASSWORD_DEFAULT) ?>


		<h1>Landing page</h1>
		<p>Welcome to this Web application. </p>
		<?php
			$this->view('shared/navigation');
		?>
	</div>
</body>
</html>