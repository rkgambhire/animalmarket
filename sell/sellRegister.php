<!doctype html>
<html lang='en-IN'>
<head>
<title>Animal_Bazar</title>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device- width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
 </script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
     </script>
     <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <!--<link rel='stylesheet' href='bootstrap.min.css'>-->
<link rel='stylesheet' style type='text/css' href='css/index1.css'>
 <script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<?php include('../header.php'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="jumbotron">
          <form method="POST" id="form" action="../farmer_details/farmerinfo.php" name="submit">
            <h3>Register</h3>
            <div class="form-group">
              <label for="usr">Name</label>
              <input type="text" class="form-control" name="name">
            </div> 
            <div class="form-group">
              <label for="usr">City/Villege</label>
              <input type="text" class="form-control" name="villageorcity">
            </div>
             <div class="form-group">
              <label for="usr">Block/tq/Mandal</label>
              <input type="text" class="form-control" name="taluka">
            </div>  
             <div class="form-group">
              <label for="usr">District</label>
              <input type="text" class="form-control" name="district">
            </div> 
             <div class="form-group">
              <label for="usr">Password</label>
              <input type="text" class="form-control" name="pwd">
            </div> 
            <input type="submit" class="btn btn-success btn-large" name="submit" value="SUBMIT">
            <!--<a class="btn btn-success btn-large" name="submit"> SUBMIT</a> -->       
              <input type="reset" value="RESET" onclick="novalidate()" class="btn btn-success btn-large">
          </form>
        </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>