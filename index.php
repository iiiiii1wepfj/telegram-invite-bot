<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();


$me = $MadelineProto->get_self();
$id = "https://t.me/projectfollor";


\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
   
$Chat = $MadelineProto->get_pwr_chat($id);

$okay  = array();

foreach($Chat['participants'] as $xx){

    
try {
   echo $xx['user']['username'];
   throw new Exception('Something bad');
} catch (Exception $e) {
    
}
    
    
    
echo "<br>";
}
}







?>
