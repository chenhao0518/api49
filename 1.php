<?php
/*$first = $_GET['first'];
$second = $_GET['second'];

echo $first + $second;*/


/*$str = '/喜剧/动作';
$str = mb_substr($str,1,8,'utf8');
echo $str;*/

$test = 'aaaaa';
$str = &$test;
$test = 'bbbbb';
echo $str;
echo $test;

?>