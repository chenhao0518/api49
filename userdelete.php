<?php
header("content-type:text/html;charset=utf-8");
$id=$_GET['id'];
$sql="delete from user where id=$id";
mysql_connect('localhost','root','123098');
mysql_query('set names utf8');
mysql_select_db('blog');
mysql_query($sql);
if(mysql_affected_rows()==1){
	header('Refresh:3;url=userlist.php');
	echo "删除成功";
}else{
	header('Refresh:2;url=userlist.php');
	echo "删除失败";
}
?>