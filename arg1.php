<?php
$myage = 19; //변수 초기화 
check_adult($myage);
function check_adult($age) // 함수 세팅 
{
    $adult_age = 20;
    $adult_check = ($adult_age <= age)? "어른" : "아이"; //삼항 연산자로 값을 비교 
    print $adult_check."입니다. "; //도트 연산자 = 문자열 연결 연산자 
}
?>
