<?php
$string = "ABCDEFGHIJKLMN";
$result = substr($string, 3, 5);
//substr()는 추출 함수이다. 
//첫 번째 인수는 대상, 두 번째 인수는 시작 위치에 대한 인덱스 번호, 세 번째 인수는 추출할 문자의 수이다. 
print $result;
?>