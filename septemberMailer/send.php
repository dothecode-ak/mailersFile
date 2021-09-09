<?php
require_once('/home/adhvith/public_html/library/mail-api.php');

$html = file_get_contents('index5.html');
$mail = sendEmail(array(
    'to' => 'anil.k@alivenow.in',
    'subject' => 'With Branded Games: Increase Engagement, App Downloads, E-commerce Sales, Product Overviews or Drive lead gen!',
    'html' => $html,
    'text' => '',
    'from' => 'anil.k@alivenow.in',
    'fromname' => 'AliveNow - Creative Tech Studio'
));
echo 'Sent Mail';
