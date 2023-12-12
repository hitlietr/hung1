<?php 
	$con=mysqli_connect('localhost','root','','qlvb');
	$thongbao=''.$id='';$tenvb='';$sohieuvb='';
	if (isset($_POST['btnLuu'])) {
		$id=$_POST['txtId'];
		$tenvb=$_POST['txtTenvb'];
		$sohieuvb=$_POST['txtSohieuvb'];
		$sql="INSERT INTO `van_bang`(`id`, `tenvb`, `sohieuvb`) VALUES ('$id','$tenvb','$sohieuvb')";
		$kq=mysqli_query($con,$sql);
		if($kq){
			$thongbao='thêm mới thành công';
		}
		else   
			$thongbao='thêm mới thất bại';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.aside{
			height: 400px;
			background-color: #f3f1f0;
		}
		.col1{
			width: 20%;
			text-align: left;
			height: 25px;
			padding: 5px 30px 5px 80px;
		}
		.col2{
			width: 55%;
			text-align: left;
			height: 25px;
			padding: 5px;
		}
	</style>
</head>
<body>
<div class="aside">
			<form method="Post">
				<table>
					<caption style="padding-top: 20px;">CẬP NHẬT THÔNG TIN</caption>
					<tr><td colspan="2" style="color:red;text-align: center;">
						<?php
						echo $thongbao;
						  ?>
						
					</td>
					</tr>
					<tr>
						<td class="col1">Mã ngành:</td>
						<td class="col2">
							<input class="dd1" type="text" name="txtId" value=<?php echo $id ?>>
						</td>
					</tr>
					<tr>
						<td class="col1">Tên VB:</td>
						<td class="col2">
							<input class="dd1" type="text" name="txtTenvb" value=<?php echo $tenvb ?>>
						</td>
					</tr>
					<tr>
						<td class="col1">SỐ HIỆU VB:</td>
						<td class="col2">
							<input class="dd1" type="text" name="txtSohieuvb" value=<?php echo $sohieuvb ?>>
						</td>
					</tr>
					<tr>
						<td class="col1"></td>
						<td class="col2">
							<input type="submit" name="btnLuu" value="Lưu">
						</td>
					</tr>
				</table>
			</form>
		</div>
</body>
</html>