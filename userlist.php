<?php
header("content-type:text/html;charset=utf-8");

mysql_connect('localhost','root','123098');
mysql_query('set names utf8');
mysql_select_db('blog');
$sql="select * from user where 2>1";
$result=mysql_query($sql);

$users=array();
while($user=mysql_fetch_assoc($result)){
	$users[]=$user;
}
//var_dump($users);
require 'userlist.html';

?>