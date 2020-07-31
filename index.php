<?php
if($_GET['mode']==1){write();}
if($_GET['mode']==2){read();}
function read()
{
    $chat = fopen("chat.txt","r");
    echo fread($chat,filesize("chat.txt"));
    fclose($chat);
}
function write()
{
    $data = fopen("chat.txt","r");
    $chatdat = fread($data,filesize("chat.txt"));
    $chat = fopen("chat.txt","w");
    $msg = $_GET['msg'];
    $blocked = "🚫Message blocked";
    if($msg[0]=="~"){
$message = "._._." . $chatdat;
    fwrite($chat,$_GET['msg'] . $message);
    fclose($chat);  
    fclose($data);
    }
    else
    {
        $message = "._._." . $chatdat;
        fwrite($chat,$blocked . $message);
        fclose($chat);
        fclose($data);
    }
}
?>