
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Login System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div>
		<form action="process.php" method="post" id="form_login">
		 	<fieldset>
			    <div class="form-group">
			      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
			      <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			    </div>
			    <div class="form-group">
			      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
			      <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password">
			    </div>
			</fieldset>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


</body>
</html>