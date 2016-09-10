<?php
header("content-type:text/html;charset=utf-8");

if(isset($_POST['submit'])){
	//获取表单信息
	$username=$_POST['Username'];
	$nickname=$_POST['Nickname'];
	$email=$_POST['Email'];
	//构建SQL语句
	//var_dump($username,$nickname);
	$sql="insert into user values(null,'$username','$email','','$nickname','0','')";
	//连接数据库】
	mysql_connect('localhost','root','123098');
	mysql_query('set names utf8');
	mysql_select_db('blog');
	mysql_query($sql);

	if(mysql_affected_rows()==1){
		header('Refresh:3;url=userlist.php');
		echo "添加成功";
	}else{
		header('Refresh:3;url=useradd.php');
		echo "添加失败";
	}
	
}else{
	require 'useradd.html';
}


?>