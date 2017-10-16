<?php
//这个函数的作用是以某个字符分割字符串并读取各块内容
function getInfo($str,$char){
 	$j = 0;
 	$sites = array();
	$count = substr_count($str,$char);
	$length = strlen($str);
	for($i=0;$i<$count;$i++){
		$site = strpos($str, $char,$j);
		if($i == 1 || $i == 0){
			$sites[] = $site;
		}
		$j = $site+1;
	}
	$desAddr_len = $sites['1']-$sites['0']-1;
	$info['srcAddr'] = substr($str,0,$sites['0']);
	$info['desAddr'] = substr($str,$sites['0']+1,$desAddr_len);
	$info['Content'] = substr($str,$sites['1']+1);
	return $info;
}

$str = '123|34|534|5677';
$char = "|";
$result =getInfo($str,$char);
print_r($result);
