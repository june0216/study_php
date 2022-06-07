<?php
$member = array("name" => "kim_ewha", "age" => 20, "tall" => 160);
foreach($member as $key => $value)
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
