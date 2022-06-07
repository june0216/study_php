<?php
list($year, $month, $day) = get_today(); //list는 배열을 뜯어주는 역할 
print $year."년".$month."월".$day."일"; //도트 연산자를 통해 한 번에 출력한다. 


function get_today()
{
    //date함수는 "2022-00-00"의 날짜를 반환
    $year = date('Y'); //date의 포맷문자열 Y = 연도의 완전한 숫자 표현, 4 숫자
    $month = date("m"); //date의 포맷문자열 m = 0이 붙는 월 숫자 표현 [ 01에서 12 ]
    $day = date('d'); //date의 포맷문자열 d = 일, 앞에 0이 붙는 2 숫자  [ 01에서 31 ]
    return array($year, $month, $day); //함수의 리턴값은 반드시 하나만 가능하기 때문에 여러 개의 값을 하나의 배열로 만들어서 리턴을 했다. 
}