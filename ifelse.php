<?php
$type = "form";
if($type == "form")
{
    print "등록폼입니다. ";

}
else
{
    if($type == "exec")
    {
        print "등록 처리중";
    }
    else{
        print "화면이 없습니다. ";
    }
}
?>