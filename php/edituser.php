<?php

session_start();
$success = "";
  
if ($_POST) {
  # code...
  $id = $_POST['id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['Address'];
  $homephone = $_POST['homephone'];
  $email  = $_POST['email'];
  $mobile = $_POST['Mobile'];
  $facebook = $_POST['Facebook'];
}
if ($_GET) {
  $id = $_GET['id'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$address = $_GET['address'];
	$homephone = $_GET['homephone'];
	$email  = $_GET['email'];
	$mobile = $_GET['mobile'];
  $facebook = $_GET['facebook'];
	
include('connect.php');

$query = "UPDATE `contacts` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `homephone` = '$homephone', `Mobile` = '$mobile', `Address` = '$address', `Facebook` = '$facebook' WHERE `contacts`.`id` = $id;";

$result = mysqli_query($con, $query);

if ($result) {
	$success = "You have updated " . $firstname . " " . $lastname . "'s details!";
}

}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?php echo $title ?></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/custom.css">

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
       <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
   
  </div><!-- /.container-fluid -->
</nav>
<div class="main container">
<div class="row">
<div class="col-xs-offset-9 col-xs-2 add-btn">
  <a class="btn btn-success" href="#"><div>+ Add Contact</div></a>
</div>

  

<article class="row">
<!--main content area-->
  <div class="col-xs-offset-1 col-xs-9 content-area">
        <br><br>
        <div class="row">
          

              <form role="form" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
              <div class="col-xs-12">
                      <input type="hidden" name="id" value="<?php echo $id;?>"></input>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Firstname</span>
                      <input type="text" class="form-control" placeholder="Firstname" aria-describedby="basic-addon1" name="firstname" value="<?php echo $firstname; ?>">
                    </div>
                  </div>
                  <br><br>
                  <div class="col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon2">Lastname</span>
                      <input type="text" class="form-control" placeholder="Lastname" aria-describedby="basic-addon2" name="lastname" value="<?php echo $lastname; ?>">
                    </div>
                  </div>
                  <br><br>
                  <div class="col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon3">Address</span>
                      <input type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon3" name="address" value="<?php echo $address; ?>">
                    </div>
                  </div>
                  <br><br>
                  <div class="col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon4">Home Phone</span>
                      <input type="text" class="form-control" placeholder="Home Phone" aria-describedby="basic-addon4" name="homephone" value="<?php echo $homephone; ?>">
                    </div>
                  </div>
                  <br><br>
                  <div class="col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon5">Mobile</span>
                      <input type="text" class="form-control" placeholder="mobile" aria-describedby="basic-addon5" name="mobile" value="<?php echo $mobile; ?>">
                    </div>
                  </div>

                  <br><br>
                  <div class="col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon7">Email</span>
                      <input type="text" class="form-control" placeholder="Email Address" aria-describedby="basic-addon7" name="email" value="<?php echo $email; ?>">
                    </div>
                  </div>
                  <br><br>
                  <div class="col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon8">Facebook</span>
                      <input type="text" class="form-control" placeholder="facebook username" aria-describedby="basic-addon8" name="facebook" value="<?php echo $facebook; ?>">
                       
                    </div>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-warning">Update Contact</button><br>
          <form><br><br>
                  <?php  echo $success; ?>
                  <br><br>
                  </div>
                      
  </div>

<!--lastname tabs-->
<div class="col-xs-2">
  <ul class="tablist">
    <a href="../index.php?lastname=a"><li>A</li></a>
    <a href="../index.php?lastname=b"><li>B</li></a>
    <a href="../index.php?lastname=c"><li>C</li></a>
    <a href="../index.php?lastname=d"><li>D</li></a>
    <a href="../index.php?lastname=e"><li>E</li></a>
    <a href="../index.php?lastname=f"><li>F</li></a>
    <a href="../index.php?lastname=g"><li>G</li></a>
    <a href="../index.php?lastname=h"><li>H</li></a>
    <a href="../index.php?lastname=i"><li>I</li></a>
    <a href="../index.php?lastname=j"><li>J</li></a>
    <a href="../index.php?lastname=k"><li>K</li></a>
    <a href="../index.php?lastname=l"><li>L</li></a>
    <a href="../index.php?lastname=m"><li>M</li></a>
    <a href="../index.php?lastname=n"><li>N</li></a>
    <a href="../index.php?lastname=o"><li>O</li></a>
    <a href="../index.php?lastname=p"><li>P</li></a>
    <a href="../index.php?lastname=q"><li>Q</li></a>
    <a href="../index.php?lastname=r"><li>R</li></a>
    <a href="../index.php?lastname=s"><li>S</li></a>
    <a href="../index.php?lastname=t"><li>T</li></a>
    <a href="../index.php?lastname=u"><li>U</li></a>
    <a href="../index.php?lastname=v"><li>V</li></a>
    <a href="../index.php?lastname=w"><li>W</li></a>
    <a href="../index.php?lastname=x"><li>X</li></a>
    <a href="../index.php?lastname=y"><li>Y</li></a>
    <a href="../index.php?lastname=z"><li>Z</li></a>
  </ul>
</div>


</article>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/myscripts.js"></script>
</body>
</html>




           