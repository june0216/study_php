<?php
$username = "user";
$password = "pass";
$user_data["username"] = "user";
$user_data["password"] = "pass";

if ($user_data["user_name"] == $user && $user_data["password"] == $password)
{
    print "회원 페이지 입니다";
}
 else{
     print "로그인 실패";
 }
 ?>