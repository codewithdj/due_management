<?php
session_start();	
  if(!(isset($_SESSION['mainadminlogin']))){
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
          <a class="navbar-brand" href="#">Dues Enquiry</a>
         

        </div>
         <ul class="nav navbar-nav pull-right" >
           <li  ><a href="lib-admin.php"><b>Library Dues</b></a></li>
				   <li  ><a  href="fee-admin.php"><b>Fee Dues</b></a></li>
           <li  ><a  href="add-student.php"><b>Add Student</b></a></li>
				   <li  ><a href="logout.php"><b>Log Out</b></a></li>        
          </ul>
		
      </div>
    </nav>

    <div class="container col-sm-6 col-md-6 col-md-offset-3" >
			 <div class="panel panel-default" style="border:3px solid white;padding:2px" >
				 <div class="panel-heading">
					 <h3 class="panel-title text-center" style="color:darkorange;font-size:18px"><b> Add New Student</b></h3>
				 </div>
				 <div class="panel-body">
			         <form method="POST" class="form" role="form" enctype="multipart/form-data" >
						 <div class="form-group">
							 <label class="control-label"for="username">Student Name</label>
					         <input type="text" class="form-control" name="sname" id="sname" placeholder="Student Name" required></input>
						 </div>
						 						
						 <div class="form-group">
							 <label class="control-label"for="fullname">Enrollment Number</label>
					         <input type="text" class="form-control" name="enrollment" id="enrollment" placeholder="Enrollment Number" required></input>
						 </div>
						 <div class="form-group">
							 <label for="sem">Semester</label>
					         <input type="text" class="form-control" name="sem" id="sem" placeholder="Semester"></input>
						 </div>
						 <div class="form-group">
							 <label class="control-label"for="branch">Branch</label>
					         <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch" required></input>
						 </div>
						 
						 <div class="form-group">
							 <label for="password">Password</label>
							 <input type="text" id="password" class="form-control" placeholder="Password" name="password" required></input>
						 </div>
						 <div class="form-group">
							 <label for="image">Upload Image</label>
							 <input type="file" id="image" class="form-control" placeholder="Upload File" name="image" ></input>
						 </div>
						
<?php
	       if(isset($_POST['insert'])){
           insert();
            }
   
			function insert(){

                    $sname = $_POST['sname'];
                    $enrollment = $_POST['enrollment'];
                    $sem = $_POST['sem'];
                    $branch = $_POST['branch'];
                    $pwd = $_POST['password'];
                    $imgPath = "";


                 $conn = mysqli_connect("localhost","root","","fees");
          $query = "insert into student_details(name,enrollNo,password,semester,branch,img_link) values('$sname','$enrollment','$pwd','$sem','$branch','$imgPath')";
                   $result = mysqli_query($conn,$query);
        
            }



?>

	 <button type="submit" name="insert" id="insert"  class="btn btn-primary col-sm-offset-5 col-md-offset-5"> Register</button>
					 </form>
			     </div>
			</div>		 
		</div>
</body>