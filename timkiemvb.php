<?php
$con=mysqli_connect('localhost','root','','qlvb');
$id='';$tenvb='';$sohieuvb='';
if (isset($_POST['btnTimkiem'])){
    $id=$_POST['txtId'];
    $tenvb=$_POST['txtTenvb'];
    $sohieuvb=$_POST['txtSohieuvb'];
    $sql = "SELECT *from van_bang where id like '%$id%'
    AND tenvb like '%$tenvb%' AND sohieuvb like '%$sohieuvb%'";
    $ketqua= mysqli_query($con,$sql);
}
    else{
        $sql="SELECT* from van_bang ";
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
    <caption style="padding-top: 20px;">CẬP NHẬT THÔNG TIN TÌM KIẾM</caption>
        <tr>
            <td class="col1">ID:</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtId" value=>
            </td>
        </tr>
        <tr>
            <td class="col1">TÊN VB:</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtTenvb" value=>
            </td>
        </tr>
        <tr>
            <td class="col1">SỐ HIỆU VB:</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtSohieuvb" value=>
            </td>
        </tr>
        <tr>
                <td colspan="2" style="text-align: center;">
                <input type="submit" name ="btnTimkiem" value ="timkiem">

                </td>
            </tr>
</table>
        <table boder="1" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>TÊN VB</th>
                <th>SỐ HIỆU VB</th>
                <th></th>
            </tr>
            <?php
            while ($row=mysqli_fetch_assoc($ketqua)){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?> </td>
                    <td><?php echo $row['tenvb'] ?> </td>
                    <td><?php echo $row['sohieuvb'] ?> </td>
                    <td>
                        <a style="color:blue; text-decoration: underline;" href="http://localhost/71dctt12/suavb.php?id=<?php echo $row['id']?>">sửa </a> &nbsp;&nbsp;&nbsp;
                        <a style ="color: blue;text-decoration: underline" href="http://localhost/71dctt12/xoavb.php?id=<?php echo $row['id'] ?>" >Xóa</a>
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