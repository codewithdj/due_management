<?php
session_start();

	if(!(isset($_SESSION['adminlogin']))){
		header("location:adminlogin.php");
	} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Library due page">
    <meta name="author" content="sachi">
   
    <title>Library Due</title>

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
                  <a class="navbar-brand" href="#">Dues Enquiry</a>

        </div>
         <ul class="nav navbar-nav pull-right" >
           <li  ><a href="logout.php"><b>Log Out</b></a></li>        
          </ul>
		
      </div>
    </nav>

        <div class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-1 main">
          <h1 class="page-header">Library Due Details</h1>

         
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>S. No.</th>
                  <th>Book Name</th>
                  <th>Issue Date</th>
                  <th>Return Date</th>
                  <th>Semester</th>
                  <th>Due</th>
                </tr>
              </thead>
              <tbody>
              
     <?php

                  $enrollment = $_SESSION["enrollment"];
        
                  $conn = mysqli_connect("localhost","root","","fees");
                  $query= "select * from lib_fees";
             			            $result = mysqli_query($conn,$query);
	
                          while($row = mysqli_fetch_assoc($result)){
                              
                              echo "<tr>";
                              echo "<td>".$row['sNo']."</td>";                           
                              echo "<td>".$row['book_name']."</td>";                           
                              echo "<td>".$row['issue_date']."</td>";                           
                              echo "<td>".$row['return_date']."</td>";                           
                              echo "<td>".$row['semester']."</td>";                           
                              echo "<td>".$row['due']."</td>";      
               echo "<td><a href='del-lib.php?id=".$row['enrollNo']."'> Delete</a></td>";
                    
       
                                        
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
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
