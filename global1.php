<?php
$data = 5; // 지역 변수 
function scope_test()
{
    //함수 안에 있는 지역 변수를 참조한다. 
    $data = 1;
    print $data;
    print "<BR>"; 
}

print $data; //5가 출력될 것이다. 
print "<BR>";
scope_test(); //함수 안에 print문이 있고 "지역변수 > 전역 변수"가 되어 지역 변수 1이 출력될 것이다. 
print $data; //5가 출력될 것이다. 
print "<BR>";
?>