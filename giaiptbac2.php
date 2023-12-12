<?php
$gt='';
if(isset($_POST['bt1'])){
	$a=$_POST['nb1'];
	$b=$_POST['nb2'];
	$c=$_POST['nb3'];
	$delta=$b*$b-4*$a*$c;
	if($a==0 && $b==0 && $c==0)
			$gt="phương trình vô số nghiệm";
		elseif($a==0 && $b==0 && $c!=0)
			$gt="phương trình vô nghiệm";
		elseif($a==0 && $b!=0){
			$x=-(float)$b/(float)$a;
			$gt="phương trình có nghiệm x= ".$x;
		}
	elseif($delta<0)
		$gt="phương trình vô nghiệm";
	elseif($delta==0)
		{
			$x=-(float)$b/(2*(float)$a);
		$gt="phương trình có nghiệm kép:".$x;
	}
	else{
		$x1=(-(float)$b+sqrt($delta))/((float)$a*2);
		$x2=(-(float)$b-sqrt($delta))/((float)$a*2);

		$gt="phương trình có 2 nghiệm x1= ".$x1 ." x2= ".$x2;
	}
}
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
<div>
	
	<form method="post">
	<table>	
	<caption style="padding-top: 30px;">GIẢI PHƯƠNG TRÌNH BẬC NHẤT Y=AX+B</caption>
	<tr>
	</tr>
			<tr>
		<td class="col1	">
			<label> nhập số a:</label>
		</td>
		<td class="col2	">
			<input type="number"name="nb1"value="">
		</td>
		</tr>
		<tr>
		<td class="col1	">
			<label> nhập số b:</label>
		</td>
		<td class="col2	">
			<input type="number"name="nb2" value="">
		</td>
		</tr>
		<tr>
		<td class="col1	">
			<label> nhập số c:</label>
		</td>
		<td class="col2	">
			<input type="number"name="nb3" value="">
		</td>
		</tr>

		<tr>
		<td class="	col1"></td>	
		<td class="col2">
			<input type="submit" name="bt1" value="giải PT">
			&nbsp;&nbsp;
			<input type="reset" name="bt2" value="reset">
		</td>
		</tr>

		</tr>
		<tr>
		<td class="	col1">
			<label>	nghiệm của phương trình:</label>

		</td>	
		<td class="col2">
			<input style="width:500PX" type="text" name="txtketqua" disabled value="<?php echo $gt ?>">
		</td>
		</tr>
	</table>
</form>
</div>		
 

</body>
</html>