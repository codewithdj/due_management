<?php
session_start();
	 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Send Alert</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>

	
<body style="background-color:#ffffff">
	<!-- Header Section Starts -->
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
            <li  ><a href="fee-admin.php"><b>Fee Dues</b></a></li>
            <li  ><a href="add-student.php"><b>Add Student</b></a></li>
            <li  ><a href="logout.php"><b>Log Out</b></a></li>        
          </ul>
		
      </div>
    </nav>
   
   <!-- Navigation bar ends -->
 
 <div class="container" style="margin-top:5%">
	 <div class="form-horizontal col-md-7 col-md-offset-2" style="margin-top:8px">
			<form method="POST"  role="form" >
	 			<input type="text" class="form-control" name="notice" id="notice" style="height:100px" placeholder="Enter Message" required />
	    <?php
	        if(isset($_POST["notice"]) ){
			       
		         $notice= $_POST["notice"];
             
		         $enroll= $_GET["id"];
		 $date = date('Y-m-d H:i:s');
							
			     include("dbConnect.php");
			    
       			 $query= "insert into notice(notice,enrollNo,ndate) values ('$notice','$enroll','$date')";
                 $result = mysqli_query($conn,$query);
        	
               }	
	?>
				 <button class="btn btn-primary" style="margin-top:14px;margin-left:45%;width:90px" >Send</button>
	 		</form>
	</div>
<!--	<div style="margin-top:20%">
	<table class="table table-bordered" >
		<thead style="background-color:#000021;color:#ffffff;font-size:17px;padding:2px">
			<th>S.No.</th>
			<th>Notice</th>
			<th>Date & Time</th>
			<th>Delete</th>
		</thead>
		<?php
		/*	     include("dbConnect.php");
	$sql="select * from notices ORDER BY notice_date desc";
	$query=mysqli_query($conn,$sql);
	   
	   while($row= mysqli_fetch_assoc($query)):	 		
*/?>		
<tr style="font-size:16px">
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['notice']; ?></td>
	<td><?php echo $row['notice_date']; ?></td>
	<td><a  onclick="return confirm('Do you really want to delete???')" href="noticedelete.php?id=<?php echo $row['id'];?>">Delete</a>
	
	</td> 
	
</tr>
	<?php
//		endwhile;
	?>
	</table>
	</div>
</div> 
-->   
</body>
</html>