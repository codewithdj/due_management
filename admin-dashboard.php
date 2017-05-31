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
           <li  ><a href="lib-admin.php"><b>Library Dues</b></a></li>
				   <li  ><a  href="fee-admin.php"><b>Fee Dues</b></a></li>
           <li  ><a  href="add-student.php"><b>Add Student</b></a></li>
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
                  $conn = mysqli_connect("localhost","root","","fees");
                  $date = date('Y-m-d');
                                    
                  $twoDayBefore =date('Y-m-d', strtotime('-3 day', strtotime($date)));
                  $query= "select * from lib_fees where return_date between '$twoDayBefore' and '$date'" ;
                  $result = mysqli_query($conn,$query);
	

                         while($row = mysqli_fetch_assoc($result)){
                              echo "<tr>";
                              echo "<td>".$row['sNo']."</td>";                           
                              echo "<td>".$row['book_name']."</td>";                           
                              echo "<td>".$row['issue_date']."</td>";                           
                              echo "<td>".$row['return_date']."</td>";                           
                              echo "<td>".$row['semester']."</td>";                           
                              echo "<td>".$row['due']."</td>";    
                              echo "<td><a href='send-notice.php?id=".$row['enrollNo']."' target='_blank' >Send Notice</a></td>";     
                             
                        echo "</tr>";	
	}
echo "</tbody>";
	echo "</table>";
	
	?>

          </div>
        </div>
     


</body>