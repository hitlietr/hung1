<?php 
	//ket noi den database
	$con=mysqli_connect('localhost', 'root', '', 'qlvb');
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql1="SELECT * FROM van_bang WHERE id='$id'";
		$kq1=mysqli_query($con,$sql1);
		while ($r=mysqli_fetch_assoc($kq1)) {
			$tenvb=$r['tenvb'];$sohieuvb=$r['sohieuvb'];
		}
	if (isset($_POST['btnsua'])) {
		$tenvb=$_POST['txtTenvb'];
		$sohieuvb=$_POST['txtSohieuvb'];
		$sql="UPDATE van_bang SET tenvb='$tenvb',sohieuvb='$sohieuvb' WHERE id='$id'";
		$kq=mysqli_query($con,$sql);	
		header('Location: timkiemvb.php');
		die();
		}
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
        table{width: 80%;padding-top: 20px;
        }
    </style>
</head>
<body>
<div class="aside">
			<form method="Post">
            <table>
            <tr>
                <td colspan="2" style="text-align: center;"> 
                    <h3>THÔNG TIN SỬA</h3>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    ID</td>
                <td class="col2"><input class="dd1" type = "text" name= "txtId" value="<?php echo $id ?>" ></td>
            </tr>
            <tr>
                <td class="col1">
                    TÊN VB
                </td>
<td class="col2"><input class= "dd1" type = "text" name= "txtTenvb" value="<?php echo $tenvb ?>"></td>
            </tr>
            <tr>
                <td class="col1">
                    SỐ HIỆU VB
                </td>
<td class="col2"><input class= "dd1" type = "text" name= "txtSohieuvb" value="<?php echo $sohieuvb ?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                <input type="submit" name ="btnsua" value ="sua">

                </td>
            </tr>
       </table>
   </form>
</div>
</body>
</html>