<?php
$string = "PHP의 함수는 
정말
편리합니다. "; //사용자는 3줄 띄어쓰기를 하여 저장했다. 
$result = nl2br($string); //사용자가 입력한 그대로 저장한다. <개행 문자를 반영>
print $result;
?>