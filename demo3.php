<?php
$username =$_GET['username'];
//$s =$_GET['s'];
mysql_connect('localhost','root','123098');
mysql_select_db('php49');
mysql_query('set names utf8');
$sql = "select * from user where username='$username'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
mysql_close();
echo $count;

?>