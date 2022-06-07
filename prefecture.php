<?php
$prefectureList = array("서울", "부산", "대구", "울산", "광주");

$html = "<SELECT name=\"prefecture\">\n";

for($i = 0 ; $i <= count($prefectureList) - 1; $i++)
{
    $html .= "<OPTION value=\"$i\">$prefectureList[$i]</OPTION>\n";
}
$html .= "<\SELECT>\n";
print $html;
?>