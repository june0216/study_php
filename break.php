<?php 
$member[0] = "ewha";
$member[1] = "1886";
$member[2] = "Mary";
$member[3] = "해방이화";
$member[4] = "1 student";
$i = 1; $limit = 3;

foreach($member as $key => $value) //member변수에서 key와 value값을 하나씩 가져온다. 
{
    if($i > $limit)
    {
        print "반복문을 빠져나옵니다. <BR>";
        break;
    }
    print "이름 : $value";
    print "<BR>"; $i++;
}
?>