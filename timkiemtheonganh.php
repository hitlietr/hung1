<?php
$con=mysqli_connect('localhost','root','','71dctt12_qldiem');
$Manganh='';$Tennganh='';
if (isset($_POST['btnTimkiem'])){
    $Manganh = $_POST['txtmanganh'];
    $Tennganh = $_POST['txttennganh'];
    $sql = "SELECT *from nganhhoc where Manganh like '%$Manganh%'
    AND Tennganh like '%$Tennganh%'";
    $ketqua= mysqli_query($con,$sql);
}
    else{
        $sql="SELECT* from nganhhoc ";
        $ketqua= mysqli_query($con,$sql);
    }


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{margin: 0;}	
		.wrapper{
			width: 960px;
			margin: 0px auto;
			background: #DBDBDB;
			font-size: 14px;
			line-height: 1.5 line;
		}
		header{
			height: 100px;
			background: 	#5121c5; ;
			
			
		}
		h1{text-align: center;}
		.nav-menu ul{
			height: 40px;
			background: #4f3590;
		}
		a{text-decoration: none; 
			color: white;}
		.nav-menu>ul>li{
			float: left;
			list-style: none;
			padding: 10px 60px;
		} 
		.nav-menu>ul>li:hover{
			display: block;
			background: #939393;
		}
		.article{
			width: 20%;
			background-color: #211161;
			float: left;
			height: 400px;
		}
		.article>ul{padding: 0px;}
		.article>ul>li{
			list-style: none;
			padding: 10px 5px;
			border: #B1B1B1 dotted 1px;
			
		}
		.article>ul>li:hover{
			display: block;
			background: #939393;
		}
		table{width: 80%;padding-top: 20px;
		}
		.col1{
			width: 20%;
			text-align: right;
			height: 25px;
			padding: 5px 30px 5px 80px;
		}
		.col2{
			width: 55%;
			text-align: left;
			height: 25px;
			padding: 5px;
		}

		.aside{
			height: 400px;
			background-color: #f3f1f0;
		}
		footer{
			height: 70px;
			background: #4f3590;
		}
		.dd1{width: 350px; height: 20px;}
	</style>
</head>
<body>
	
		<header>
			<img src="../Test_Web/picture/logo.png"
			
		</header>
		<nav class="nav-menu">
			<ul >
				<li><a href="">Trang chủ</a></li>
				<li><a href="">Đăng nhập</a></li>
				<li><a href="">Chức năng</a></li>
				<li><a href="">Thoát</a></li>
				<li><a href="">Liên hệ</a></li>
			</ul>
		</nav>
		<div class="article">
			<ul>
				<li><a href="">Quản lý thông tin</a></li>
				<li><a href="">Tìm kiếm thông tin</a></li>
				<li><a href="">Quản lý nghiệp vụ</a></li>
				<li><a href="">Báo cáo và thống kê</a></li>
			</ul>
		</div>
		<div class="aside">
			<form method="Post">
            <table>
            <tr>
                <td colspan="2" style="text-align: center;"> 
                    <h3>THÔNG TIN TÌM  KIẾM NGÀNH HỌC</h3>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    Mã ngành</td>
                <td class="col2"><input class="dd1" type = "text" name= "txtmanganh" value = ></td>
            </tr>
            <tr>
                <td class="col1">
                    Tên ngành
                </td>
<td class="col2"><input class= "dd1" type = "text" name= "txttennganh" value = ></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                <input type="submit" name ="btnTimkiem" value ="timkiem">

                </td>
            </tr>
        </table>
        <table boder="1" cellspacing="2">
            <tr>
                <th>Mã ngành</th>
                <th>Tên nganh</th>
                <th></th>
            </tr>
            <?php
            while ($row=mysqli_fetch_assoc($ketqua)){
                ?>
                <tr>
                    <td><?php echo $row['Manganh'] ?> </td>
                    <td><?php echo $row['Tennganh'] ?> </td>
                    <td>
                        <a style="color:blue; text-decoration: underline;" href="http://localhost/71dctt12/suamanganh.php?Manganh=<?php echo $row['Manganh']?>">sửa </a> &nbsp;&nbsp;&nbsp;
                        <a style ="color: blue;text-decoration: underline" href="http://localhost/71dctt12/xoanganhhoc.php?Manganh=<?php echo $row['Manganh'] ?>" >Xóa</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
			</form>
	</div>
    
</body>
</html>