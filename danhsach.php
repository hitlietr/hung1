<?php
$sv=array(array('hoten'=>'Nguyễn Văn A',
'tuoi'=>19,
'diachi'=>'Hòa Bình',
'email'=>'qn@gmail.com'),
	array('hoten'=>'Nguyễn Văn A',
'tuoi'=>19,
'diachi'=>'Hòa Bình',
'email'=>'qn@gmail.com'),
	array('hoten'=>'Nguyễn Văn B',
'tuoi'=>19,
'diachi'=>'Đồng Nai',
'email'=>'23cqn@gmail.com'),
	array('hoten'=>'Nguyễn Văn C',
'tuoi'=>19,
'diachi'=>'Nam Dịnh',
'email'=>'qdsn@gmail.com'),
	array('hoten'=>'Nguyễn Văn D',
'tuoi'=>19,
'diachi'=>'Thanh Hóa',
'email'=>'bn@gmail.com')
);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
</head>
<style type="text/css">
	*{margin: 0PX;}
	.header{
		height: 100px;
		background: gray;
		padding-top: 20px;
		padding-left: 10px;

	}
	.menu{
		height: 40px;
		background: brown;
	}
	.menu>ul>li{
		list-style: none;
		float: left;
		padding: 10px 40px 10px 0px;
	}
	
	a{
		color: white;
		text-decoration: none;
	}
	p{

	}
	.menu_left{
		height: 500px;
		width: 400px;
		float: left;
		padding: 20px;
		background-color:	blue	;
		}
		.content{
		text-align: justify;
		padding: 20px 20px 20px 0px;
	}
	.aside{
		height: 400px;
		background-color:lime ;
	  }
	.col1{
		width: 	40%;
		text-align:right;
		height: 	25px;
		padding: 	5px 35px;	
	}
	.col2{
		width: 	60%;
		text-align:left;
		height: 	25px;
		padding: 	5px 35px;
	}
</style>

<body>
<div class="header">
	<h1 style="text-align: center;">website lập trình viên trên nền </h1>
</div>
<div class="menu">
	<ul>
		<li><a href="C:\Users\admin\bttl.html">Trang chủ</a></li>
		<li><a href="C:\Users\admin\da.html">Thủ thuật</a></li>
		<li><a href="C:\Users\admin\bt-html.html">Tin văn phòng</a></li>
		<li><a href="">Đồ họa</a></li>
		<li><a href="">Thiết kế web</a></li>
		<li><a href="">Lập trình</a></li>
	</ul>
</div>
<div class="menu_left">
	<ul>
		<li><a href="">Bài tập áp dụng 1</a></li>
		<li><a href="">Bài tập áp dụng 2</a></li>
		<li><a href="">Bài tập áp dụng 3</a></li>
		<li><a href="">Bài tập áp dụng 4</a></li>
	

	</ul>
</div>
<div class="aside">
	<form method="post">
	<table border="1" cellspacing="0">	
	<caption style="padding-top: 30px;">DANH SÁCH</caption>
	<tr>
		<th>STT</th>
		<th>Họ & tên</th>
		<th>Tuổi</th>
		<th>Địa chỉ</th>
		<th>email</th>
	</tr>
		<?php
		
		for($i=0;$i<count($sv);$i++){
			echo '<tr>
			<td>'.($i+1).'</td>
			<td>'.$sv[$i]['hoten'].'</td>
			<td>'.$sv[$i]['tuoi'].'</td>
			<td>'.$sv[$i]['diachi'].'</td>
			<td>'.$sv[$i]['email'].'</td>
			</tr>'; 
			
		}
		?>	
	</table>
</form>
</div>		
 

</body>
</html>