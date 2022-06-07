<?php
$str = "안녕하세요";
$length = strlen($str); //영문 문자열이 몇 바이트(Byte)인지를 가져오는 함수 (영문은 1바이트, 한글은 1~4바이트)
$mb_length = mb_strlen($str); //문자열과 현재 파일의 인코딩(= 문자셋 혹은 charset )을 인수로 사용 -> 한글의 문자 길이를 바로 알 수 있다. 

print $length; // 15를 출력
print "<BR>";
print $mb_length; //5를 출력(5글자)
?>