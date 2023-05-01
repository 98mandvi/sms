<?php
$connection = mysqli_connect("localhost", "root", "");
// log form data
$roll_no = $_POST['roll_no'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$class = $_POST['class'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$remark = $_POST['remark'];
// log to echo
echo $roll_no . "" . $name . "" . $father_name . "" . $class . "" . $mobile . "" . $email . "" . $password . "" . $remark;
$db = mysqli_select_db($connection, "management");
// update query
$query = "update students set name='$name',father_name='$father_name',class='$class',mobile='$mobile',email='$email',password='$password',remark='$remark' where roll_no = $roll_no";
// $query_run = mysqli_query($connection, $query);
if (mysqli_query($connection, $query)) {
	echo "Record updated successfully";
} else {
	// log query string
	echo $query;
	echo "Error updating record: " . mysqli_error($connection);
}
?>

<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "mandvi_admindashboard.php"; 
</script>