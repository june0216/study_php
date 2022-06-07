<?php
check_member();
//내부에서 함수의 매개변수 디폴트 세팅(guest)을 해줬기 때문에 매개변수로 값을 안넣어도 실행 가능
function check_member($username = "guest", $password = "guest")
{
    if($username == "guest"&& $password = "guest") //디폴트 세팅 값이 들어온 경우 
    {
        print "게스트님 환영합니다!";
    }
    else{
        print "회원님 환영합니다!";
    }
}
?>