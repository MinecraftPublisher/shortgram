<?php
/*
There is a token verification added now,
You must add a token_number.txt like 129837917648726.txt to be able to send message.




*/
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
    $token = ".txt";
    $verification = fopen($_GET['tkn'] . $token,"r");
    $verify = fread($verification,filesize($_GET['tkn'] . $token));
    if($verify == "yes")
    {
        $data = fopen("chat.txt","r");
        $chatdat = fread($data,filesize("chat.txt"));
        $chat = fopen("chat.txt","w");
        $msg = $_GET['msg'];
        $blocked = "🚫Message blocked<br>This message is blocked due to not getting posted by the shortcut,if you are using the shortcut,try to update to the newest version.🌮";
        if($msg[0]=="~")
        {
            $message = "._._." . $chatdat;
            $time = date("h:i") . "👾";
            fwrite($chat,$time . $_GET['msg'] . $message);
            fclose($chat);  
            fclose($data);
        }
        else
        {
            /*$message = "._._." . $chatdat;
            fwrite($chat,$blocked . $message);
            fclose($chat);
            fclose($data);
            echo "blocked";*/
        }
    }
    else
    {
        echo "failed";
        echo $verify;
    }
}
?>
