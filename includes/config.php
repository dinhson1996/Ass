<?php
error_reporting(0);
//Thong tin ket CSDL
$conn=mysql_connect("localhost","root","")
	or die("Lỗi: Không Thể Kết Nối Đến Database.Xin Cảm Ơn!");
mysql_select_db("banhang",$conn);
?>