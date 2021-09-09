<?php
require_once('/home/adhvith/public_html/library/mail-api.php');

$html = file_get_contents('index.html');
$mailidlist=["anil.k@alivenow.in"];
for ($a = 0; $a < count($mailidlist); $a++) {
$mail = sendEmail(array(
    'to' => $mailidlist[$a],
    'subject' => "Coca Cola Thunder Test",
    'html' => $html,
    'text' => '',
    'from' => 'contact@alivenow.in',
    'fromname' => 'AliveNow - Creative Tech Studio'
));
}

echo $mail;