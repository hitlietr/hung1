<?php
$con=mysqli_connect('localhost','root','','qlvb');
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$sql="DELETE FROM van_bang where id='$id'";
	mysqli_query($con,$sql);
	header('Location:timkiemvb.php ');
	die();
	//echo '<script> alert('Xóa thành công'); </script>';
	}
?>