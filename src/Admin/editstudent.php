<?php 
if (!isset($_SESSION)) {
	session_start();
}
include('./admininclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_admin_login'])) {
	$adminLogemail =$_SESSION['adminLogemail'] ;
}else{
	echo "<script> location.href='../index.php';</script>";
}
if(isset($_REQUEST['requpdate'])){
	if (($_REQUEST['stu_id'] == "") ||($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == "") ) {
		$msg = '<div class ="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields<?div>'	;
	}
	else{
		$sid = $_REQUEST['stu_id']; 
		$sname = $_REQUEST['stu_name']; 
		$semail = $_REQUEST['stu_email'];
		$spass = $_REQUEST['stu_pass'];
		$socc = $_REQUEST['stu_occ'];
		$sql = "UPDATE student SET stu_id ='$sid',stu_name ='$sname', stu_email ='$semail',stu_pass ='$spass', stu_occ='$socc' WHERE stu_id = '$sid'";
		  if ($conn -> query($sql) == TRUE) {
		  	$msg = '<div class ="alert alert-success col-sm-6 ml-5 mt-2">Updated Succesfully<?div>';
		  }
		  else{
		  	$msg = '<div class ="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update <?div>'	;
		  }
		}
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Update Student Details</h3>
	<?php
	  if (isset($_REQUEST['view'])) {
	   	$sql = "SELECT * FROM student WHERE stu_id ={$_REQUEST['id']}";
	   	$result = $conn->query($sql);
	   	$row = $result->fetch_assoc();
	   } 
	?>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="stu_id">Student Id</label>
			<input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if(isset($row['stu_id'])){ echo $row['stu_id'] ; } ?>" readonly >
		</div>
		<div class="form-group">
			<label for="stu_name" style="margin-top: 10px;">Name</label>
			<input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php if(isset($row['stu_name'])){ echo $row['stu_name'] ; } ?>">
		</div>
		<div class="form-group">
			<label for="stu_email" style="margin-top:10px;">Email</label>
			<input class="form-control" id="stu_email" name="stu_email",
				value="<?php if(isset($row['stu_email'])){ echo $row['stu_email'] ; } ?>">

		</div>
		<div class="form-group">
			<label for="stu_pass" style="margin-top:10px;">Password</label>
			<input type="text" class="form-control" id="stu_pass" name="stu_pass" value="<?php if(isset($row['stu_pass'])){ echo $row['stu_pass'] ; } ?>">
		</div>
		<div class="form-group">
			<label for="stu_occ" style="margin-top:10px;">Occupation</label>
			<input type="text" class="form-control" id="stu_occ" name="stu_occ" value="<?php if(isset($row['stu_occ'])){ echo $row['stu_occ'] ; } ?>">
		</div>
		<br>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update
			</button>
			<a href="student.php" class="btn btn-secondary">Close</a>
		</div>
		<?php if (isset($msg)) {
			echo $msg;
		} ?>
	</form>
</div>

<?php 
include('./admininclude/footer.php'); 
?>