<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Contact list</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
      <a class="navbar-brand" href="#">Your Contact List</a>
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
	<a class="btn btn-success" href="php/add_customers.php"><div>+ Add Contact</div></a>
</div>

	

<article class="row">
<!--main content area-->
	<div class="col-xs-offset-1 col-xs-9 content-area">
								<?php
						if ($_GET) {
							
							$lastname = "";
							
							$lastname = $_GET['lastname'];
							
							
						include('php/connect.php');
						$query = "SELECT * FROM `contacts` WHERE `lastname` LIKE '$lastname%'";
						$result = mysqli_query($con, $query);
						if (mysqli_num_rows($result) == 0) {
							echo "<br><h1>Sorry no matches found</h1>";
							
						} else {
								while ($row = mysqli_fetch_assoc($result)) {
								echo "<br><div class='well'>								
								<h2>First Name : <small>" . $row['firstname'] . "</small></h2>
								<h2>Last Name : <small>" . $row['lastname'] . "</small></h2>
								<h2>Phone : <small>" . $row['homephone'] . "</small></h2>
								<h2>Mobile : <small>" . $row['Mobile'] . "</small></h2>
								<h2>Email : <small>" . $row['email'] . "</small></h2>
								<h2>Address : <small>" . $row['Address'] . "</small></h2>
								<h2>Facebook : <small><a href='https://www.facebook.com/" . $row['Facebook'] . "'>Go to profile</a></small></h2>

							
								</div><br><br>
								<div class='row'>
									<div class='col-xs-12'
									<form class='del-edit' action='php/deleteuser.php' method='post'>
									<input type='hidden' name='delete' value='" . $row['id']."'></input>
									<input type='submit' class='btn btn-danger' value='Delete'></input></form>

									<form class='del-edit' action='php/edituser.php' method='post'>
									<input type='hidden' name='id' value='" . $row['id']."'></input>
									<input type='hidden' name='firstname' value='" . $row['firstname']."'></input>
									<input type='hidden' name='lastname' value='" . $row['lastname']."'></input>
									<input type='hidden' name='homephone' value='" . $row['homephone']."'></input>
									<input type='hidden' name='Mobile' value='" . $row['Mobile']."'></input>
									<input type='hidden' name='email' value='" . $row['email']."'></input>
									<input type='hidden' name='Address' value='" . $row['Address']."'></input>
									<input type='hidden' name='Facebook' value='" . $row['Facebook']."'></input>
									<input type='submit' class='btn btn-warning' value='Edit'></input></form>

								</div>
								</div>";
								
								}
						}

					
						
						}
						?>
	</div>

<!--lastname tabs-->
<div class="col-xs-2">
	<ul class="tablist">
		<a href="index.php?lastname=a"><li>A</li></a>
		<a href="index.php?lastname=b"><li>B</li></a>
		<a href="index.php?lastname=c"><li>C</li></a>
		<a href="index.php?lastname=d"><li>D</li></a>
		<a href="index.php?lastname=e"><li>E</li></a>
		<a href="index.php?lastname=f"><li>F</li></a>
		<a href="index.php?lastname=g"><li>G</li></a>
		<a href="index.php?lastname=h"><li>H</li></a>
		<a href="index.php?lastname=i"><li>I</li></a>
		<a href="index.php?lastname=j"><li>J</li></a>
		<a href="index.php?lastname=k"><li>K</li></a>
		<a href="index.php?lastname=l"><li>L</li></a>
		<a href="index.php?lastname=m"><li>M</li></a>
		<a href="index.php?lastname=n"><li>N</li></a>
		<a href="index.php?lastname=o"><li>O</li></a>
		<a href="index.php?lastname=p"><li>P</li></a>
		<a href="index.php?lastname=q"><li>Q</li></a>
		<a href="index.php?lastname=r"><li>R</li></a>
		<a href="index.php?lastname=s"><li>S</li></a>
		<a href="index.php?lastname=t"><li>T</li></a>
		<a href="index.php?lastname=u"><li>U</li></a>
		<a href="index.php?lastname=v"><li>V</li></a>
		<a href="index.php?lastname=w"><li>W</li></a>
		<a href="index.php?lastname=x"><li>X</li></a>
		<a href="index.php?lastname=y"><li>Y</li></a>
		<a href="index.php?lastname=z"><li>Z</li></a>
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