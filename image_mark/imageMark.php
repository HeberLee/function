<?php
	//这是一个为图片添加图片水印的小程序
	$src = "246.jpg";
	$info = getimagesize($src);
	//获取图片类型，此处$type = 'jpg';
	$type = image_type_to_extension($info[2],false);
	//拼接字
	$fun = "imagecreatefrom{$type}";
	//将等待处理的图片写入内存
	$image = $fun($src);
	//水印内容
	$image_Mark = "101.png";
	$info_2 = getimagesize($image_Mark);
	$type_2 = image_type_to_extension($info_2[2],false);
	$fun_2 = "imagecreatefrom{$type_2}";
	$mark = $fun_2($image_Mark);
	
	imagecopymerge($image, $mark, 20,30,0,0, $info_2[0], $info_2[1], 30);
	$func = "image{$type}";
	header("Content-type:".$info['mime']);
	 $func($image);

	$func($image,'new246.'.$type);
	//摧毁内存中的图片
	imagedestroy($mark);