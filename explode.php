<?php
$string = "사과,귤,감,밤";
$array = explode(',', $string); //","를 구분자로 삼고 이를 기준으로 하나씩 배열로 저장한다. 
print "<PRE>"; //<PRE>태그는 미리 정의된 형식(preformatted)의 텍스트를 정의한다. 
print_r($array); //print_r 함수는 배열의 구조를 보여주는 함수이다. 
print "</PRE>";
?>