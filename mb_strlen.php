<?php
$str = "안녕하세요";
$length = strlen($str);
$mb_length = mb_strlen($str);
print $length; //문자열의 길이를 센다 
print "<BR>";
print $mb_length; //바이트 단위로 문자열의 길이를 센다 
?>