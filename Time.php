<?php
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
    include 'madeline.php';
    $MadelineProto = new \danog\MadelineProto\API('Source_Home.madeline');
    $MadelineProto->async(true);
    $MadelineProto->loop(function () use ($MadelineProto) {
    yield $MadelineProto->start();

    date_default_timezone_set('Asia/Tehran');
    $time = date("H•i");
try {
    yield $MadelineProto->channels->joinChannel(['channel' => '@Source_Home']);
    yield $MadelineProto->account->updateStatus(['offline'=> false]);
    yield $MadelineProto->account->updateProfile(['last_name' => "$time"]); // به جای last_name میتونید first_name بزارید تا تایم روی اسم خودتون به نمایش بزاره
    } catch (\danog\MadelineProto\RPCErrorException $e) {
    } catch (\danog\MadelineProto\Exception $e2) {
    }
    });
   echo (base64_decode('PGNlbnRlcj48aDE+VGltZSBOYW1lPC9oMT48YnI+PGgzPlBvd2VyZCBCeSA8YSBocmVmPSJodHRwczovL3QubWUvU291cmNlX0hvbWUiIHRhcmdldD0iX2JsYW5rIj5AU291cmNlX0hvbWU8L2E+PC9oMz48L2NlbnRlcj4='));  // لطفا تغییراتی ایجاد نکنید
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/   
?>