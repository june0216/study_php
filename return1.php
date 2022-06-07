<?php
$str = "지속가능 사회를 선도하는 창의혁신 플랫폼";
$byte = 16;
$flag = checkByte($str, $byte);

if($flag)
{
    print "OK 입니다. ";
}

else{
    print "오류 입니다. ";
    print $byte;
    print "Byte를 초과하였습니다. ";
}

function checkByte($str, $byte)
{
    $strlen = strlen($str);

    if($strlen <= $byte)
    {
        return true;
    }
    return false;
}
?>