
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-8">
					<div class="jumbotron">
					    <h1>Register:</h1>
						<form method="POST" action = "save.php">
						    <div class="form-group">
								<label for="email">Name:</label>
								<input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required>
						    </div>
						    <div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
						    </div>

							    <div class="form-group">
								    <label for="email">Phone No:</label>
								    <input type="number" class="form-control" id="email" placeholder="Enter phone number" name="phone" required>
								</div>
								<div class="form-group">
								    <label for="pwd">Password:</label>
								    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
								</div>
								<!--<div class="checkbox">
								    <label><input type="checkbox" name="remember"> Remember me</label>
								</div>-->
								<div class="row">
								<div class="col-sm-4"></div>
								<div class="col-sm-4">
								    <button type="submit" class="btn btn-info btn-lg" name="submit">Submit</button>
                                </div>
                                <div class="col-sm-4"></div>
								</div>	
						</form>
						<br><br>
						<form method="POST" action="save.php">
						<div class="row">
								<div class="col-sm-4"></div>
								<div class="col-sm-4">
						    <button type="submit" class="btn btn-info btn-lg" align="center" name="show" >SHOW</button>
						</form>    
					</div>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
		</div>
</body>
</html>


