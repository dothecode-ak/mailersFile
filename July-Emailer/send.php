<?php
require_once('/home/adhvith/public_html/library/mail-api.php');

$html = file_get_contents('FinalJulyMailer21.html');
$mailidlist=[""];
for ($a = 0; $a < count($mailidlist); $a++) {
$mail = sendEmail(array(
    'to' => $mailidlist[$a],
    'subject' => "Integrate Augmented Reality to your marketing mix. Examples inside.",
    'html' => $html,
    'text' => '',
    'from' => 'contact@alivenow.in',
    'fromname' => 'AliveNow - Creative Tech Studio'
));
}

echo $mail;
