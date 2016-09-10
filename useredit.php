<?php
header("content-type:text/html;charset=utf-8");
	$id = $_GET['id'];
if (isset($_POST['submit'])) {
	$userName=$_POST['Username'];
	$userNick=$_POST['Nickname'];
	$email=$_POST['Email'];
	$sql="update user set username='$userName', email='$email', nickname='$userNick' where id=$id";
	mysql_connect('localhost', 'root', '123098');
	mysql_query('set name utf8');
	mysql_select_db('blog');
	mysql_query($sql);
	if (mysql_affected_rows() == 1) {
		header('Refresh:3;url=userlist.php');
		echo "修改成功";
	} else {
		header('Refresh:3;url=useredit.php');
		echo "修改失败";
	}
} else {
	$sql="select * from user where id = $id";
	mysql_connect('localhost', 'root', '123098');
	mysql_query('set names utf8');
	mysql_select_db('blog');
	$result = mysql_query($sql);
	$user = mysql_fetch_assoc($result);
	require 'useredit.html';
}

?>