<HTML>
<head>
<title>PHP 테스트</title>
</head>
<body>
    <?php
    $member[] = array("name" => "kimewha", "age" => 20, "tall" => 170); //2차원 배열로 저장된다. 
    print $member[0]["name"]; print "<BR>"; print $member[0]["age"]; print "<BR>"; print $member[0]["tall"];
    ?>
</body>
</HTML>