<?Php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
require_once('/home/adhvith/public_html/libs2/functions.php');
$obj = new Functions("india");

$redirectArr = array(
    'bcc' => 'https://youtu.be/JnmNePDYxPE',
    'nissan' =>'https://www.instagram.com/ar/529423281359360/',
    'burger_king'=>'https://youtu.be/3Gc88kSFr-g',
    'colgate_maxfresh'=>'https://youtu.be/Ii175XDmRNQ',
    'pizza_hut'=>'https://www.instagram.com/ar/513381226524135/',
    'orio'=>'https://youtu.be/wbKrXdVD1CI',
    'hyper_panda'=>'https://lens.snapchat.com/c7a7bd0a310c49c5b098c42d91927043',
    'virtual_try'=>'https://youtu.be/SC_9vZ-urU0',
    'dubai_properties'=>'https://lens.snapchat.com/2e636c00ce0b46f2b731b6ab67ebbe05',
    'cadbury_footbal'=>'https://youtu.be/A_mFESi_pdQ',
    'prime_vdo'=>'https://youtu.be/63TMnsiSckY',
    'uro_bank'=>'https://youtu.be/Oa_8sCLGhuI/',
    'penality_shootout'=>'https://alivenow.8thwall.app/penalty-shootout-2/',
    'exp_more_link'=>'https://www.alivenow.in/Portfolio.php',
    'read_now'=>'https://www.thedrum.com/profile/alivenow-creative-tech-studio/news/9-reasons-why-augmented-reality-should-be-an-integral-part-of-marketing-campaigns'

);

$test=$obj->clickUpdater("alivenow_july21_emailer_clicks", 1, $_GET["click_type"]);
 
header("Location: " . $redirectArr[$_GET["click_type"]]);
die();
