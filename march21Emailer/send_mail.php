<?php
    require_once ('/home/adhvith/public_html/libs2/functions.php');
    require_once('/home/adhvith/public_html/library/mail-api.php');
    $obj = new Functions('india');

    $html = file_get_contents('marchMailer21.html');
    
    $query = $obj->myPdo->from('alivenow_mailing_list_4')
            ->where('status', 0)
            ->orderBy('id')
            ->limit(100);
    $res = $query->fetchAll();

    if(count($res) > 0) {
        foreach($res as $result) {
            $data = array("status"=>1,"mailSentAt"=>date("Y-m-d H:i:s"));
            $datasave=$obj->updateData("alivenow_mailing_list_4",$data,array("id"=>$result['id'], "status"=>0));

            $mail = sendEmail(array(
                'to' => $result['email'],
                'subject' => "Immersive Marketing using Web-based AR & Hyper Casual Branded Games | Ramadan & IPL Promo Ideas inside!",
                'html' => $html,
                'text' => '',
                'from' => 'contact@alivenow.in',
                'fromname' => 'AliveNow - Creative Tech Studio'
            ));
        }
    }
