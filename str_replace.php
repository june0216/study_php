<?php $html = '<FONT size = "3">Hello!</FONT><BR>';
$search = 'size="3"';
$replace = 'size="5"';
$result = str_replace($search, $replace, $html);
//str_replace 함수는 첫 번째 인수(바꾸고 싶은 내용)를 찾고, 두 번째 인수(변경할 내용)로 전환한다. 
//세 번째 인수(반영할 변수)의 내용에 그것을 저장한다. 
print "$result";
?>