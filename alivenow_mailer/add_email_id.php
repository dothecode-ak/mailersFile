<?php
/* require_once ('/home/adhvith/public_html/libs2/functions.php');
$obj = new Functions("india");

$file = fopen("all_contacts_list_export.csv","r");
$i=0;
while(! feof($file) && $i < 38879)
{
   $email = fgetcsv($file)[0];
   $values = ["email"=>$email, "status"=>0];
   $obj->saveData('alivenow_mailing_list_10', $values,false);
   $i++;
}

fclose($file);
echo "ok"; */