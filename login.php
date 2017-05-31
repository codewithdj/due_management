<?php
	session_start();
	if(isset($_SESSION['login']))
      {
	     if($_SESSION['login'] == "yes"){
			 header("location: tution-fee.php");
			 exit();
		 }
      }
	
	

	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>LogIn</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Enrollment Number</label>
        <input type="text" id="enrollment" name="enrollment" class="form-control" placeholder="Enrollment Number" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        
    <?php
        if(isset($_POST['enrollment']) & isset($_POST['inputPassword']))
        {


          $password = $_POST['inputPassword'];
          $enrollment=$_POST['enrollment'];
          
          $conn = mysqli_connect("localhost","root","","fees");
          $query = "SELECT * FROM ulogin WHERE password='$password' AND enrollNo = '$enrollment'";
          $result = mysqli_query($conn, $query);
            

          if(mysqli_num_rows($result)>0)
          {
            $userData = mysqli_fetch_assoc($result);
            $_SESSION["login"]="yes";
            $_SESSION["username"]=$userData["username"];

                $_SESSION["enrollment"]=$userData["enrollNo"];
                    
            header('location: tution-fee.php');
          }
          else
          {
            echo '<p style="color:red" class="center">Login Failed</p>';
          }

        }
     ?>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
</body>
</html>
