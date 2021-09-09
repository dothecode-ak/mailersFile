<?Php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
require_once('/home/adhvith/public_html/libs2/functions.php');
$obj = new Functions("india");

$redirectArr = array(
    'Doritos' => 'https://www.instagram.com/ar/674266536532563/',
    'MichelinFormulaE2021' => 'https://www.instagram.com/ar/3635424323207206/',
    'ColgateMaxFresh' => 'https://www.instagram.com/ar/913121105895275/',
    'NissanXTerra' => 'https://www.instagram.com/ar/529423281359360/',
    'TATAFounder’sDayGame' => 'https://www.newsfeedsmartapp.com/TATAgame/?source=Facebook',
    'HomewithDisney' => 'https://www.newsfeedsmartapp.com/Disney/360/index.html',
    'RoyalStag-MarkofPurity' => 'https://www.newsfeedsmartapp.com/RoyalStag2020/web/index.html',
    'LumiHealthApp' => 'https://newsfeedsmartapp.com/LumiHealth/',
    'Drishyam2' => 'https://alivenow.8thwall.app/drishyam2-final/',
    'alivenowHomeClick' => 'https://www.alivenow.in/',
    'GreatMoment' => 'https://alivenow.8thwall.app/eurobank-final/',
    'moreOnClick' => 'https://bit.ly/3eNBIE1',
    'newsfeedClick' => 'https://newsfeedsmartapps.com',
    'fbPlayableClick' => 'https://bit.ly/30u5Krg',
    'swipeUpClick' => 'https://www.swipeupgames.com',
    'fbClick' => 'https://www.facebook.com/alivenowinc/',
    'fbPage' => 'https://www.alivenow.in/FacebookARfilters.php',
    'inClick' => 'https://www.instagram.com/alivenowinc/',
    'twClick' => 'https://twitter.com/AliveNowInc',
    'liClick' => 'https://www.linkedin.com/company/alivenow',
    'yuClick' => 'https://www.youtube.com/alivenowinc',
    'WebAr' =>  'https://www.alivenow.in/WebAR.php'
);



$obj->clickUpdater("alivenow_filter_emailer_clicks", 1, $_GET["click_type"]);

header("Location: " . $redirectArr[$_GET["click_type"]]);
die();
