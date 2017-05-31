<?php
session_start();
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
    <link rel="icon" href="../../favicon.ico">

    <title>Tution Fee</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>

      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
         

        </div>
         <ul class="nav navbar-nav pull-right" >
       	   <li  ><a href="logout.php"><b>Log Out</b></a></li>        
          </ul>
		
      </div>
    </nav>

        <div class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-1 main">
          <h1 class="page-header">Tution Fee</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Semester</th>
                  <th>Tution Fee</th>
                  <th>Fee Due</th>
                  <th>Paid</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>

              <?php
                  $conn = mysqli_connect("localhost","root","","fees");
                  $query= "select * from tution_fees";
             			            $result = mysqli_query($conn,$query);
	

                         while($row = mysqli_fetch_assoc($result)){
                              echo "<tr>";
                              echo "<td>".$row['semester']."</td>";                           
                              echo "<td>".$row['tutionFee']."</td>";                           
                              echo "<td>".$row['feeDue']."</td>";                           
                              echo "<td>".$row['feePaid']."</td>";                           
                              echo "<td>".$row['date']."</td>";  
                              echo "<td><a href='del-fee.php?id=".$row['enrollNo']."'> Delete</a></td>";
                                     
	echo "</tr>";	
	}
echo "</tbody>";
	echo "</table>";
	
	?>

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
