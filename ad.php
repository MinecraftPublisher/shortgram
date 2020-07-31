<?php
$chatdat = fopen("chat.txt","r");
$history = "._._." . fread($chatdat,filesize("chat.txt"));
fclose($chatdat);
$ad = fopen("chat.txt","w");
fwrite($ad,"[AD]ADVERTIZE HERE,ADD THIS PHP AS A CRON JOB" . $history);
fclose($ad);
echo "success";


?>
