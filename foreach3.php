<?php
$member = array("name" => "kim_ewha", "age" => 20, "tall" => 160);
foreach($member as $key => $value)
//foreach 함수는 변수 값 안의 내용이 전부 소진될 때까지 반복문을 진행한다. 
{
    if($key == "name")
    {
        $title = "이름";

    }
    else{
        if($key == "age")
        {
            $title = "연령";
        }
    
    else{
        if($key == "tall")
        {
            $title = "신장";
        }
    }
}
    print "$title : $value";
    print "<BR>";
} 
?>
