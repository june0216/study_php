<?php
$type;
switch($type)
{
    case "form";
    print "등록폼입니다";
    break;

    case "confirm";
    print "확인 화면입니다. ";
    break;

    case "exec";
    print "등록 처리중 ";
    break;

    default:
    print "화면이 없습니다. ";
    
}
?>