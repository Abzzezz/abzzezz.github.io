<?php
header( "Content-type: image/png" );

$text = $_GET["text"];
$width = 390;
$height = 500;
$font_size = 40;

$font = "fonts/Roboto-Light.ttf";


$my_img = imagecreate( $width, $height );                             //width & height
$background  = imagecolorallocate( $my_img, 0,   0,   0 ); //Black background
$text_color = imagecolorallocate( $my_img, 255, 255, 255 ); //White string

list($left, $right) = imageftbbox(  $font_size, 0, $font, $text);
imagettftext( $my_img, $font_size, 0, 0, $height / 6,  $text_color, $font, $text);


imagepng( $my_img );
imagedestroy( $my_img );

