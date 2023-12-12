<?php
$con=mysqli_connect('localhost','root','','71dctt12_qldiem');
if (isset($_GET['Manganh'])) {
	$Manganh=$_GET['Manganh'];
	$sql="DELETE FROM nganhhoc where Manganh='$Manganh'";
	mysqli_query($con,$sql);
	header('Location:timkiemtheonganh.php ');
	die();
	//echo '<script> alert('Xóa thành công'); </script>';
	}
?>