<?php
	//这是一个为图片添加文字水印的小程序
	$src = "101.png";
	$info = getimagesize($src);
	//获取图片类型，此处$type = 'png';
	$type = image_type_to_extension($info[2],false);
	//拼接字
	$fun = "imagecreatefrom{$type}";
	//将等待处理的图片写入内存
	$image = $fun($src);
	//字体，此处为微软雅黑
	$font = "msyh.ttf";
	//水印内容
	$content = "Heber";
	//自己查手册
	$color = imagecolorallocatealpha($image, 0, 0, 0, 50);
	imagettftext($image,20, 0, 160, 40, $color, $font, $content);

	$func = "image{$type}";

	// header("Content-type:".$info['mime']);
	//  $func($image);

	$func($image,'new101.'.$type);
	//摧毁内存中的图片
	imagedestroy($image);