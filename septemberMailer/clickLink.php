<?Php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
require_once('/home/adhvith/public_html/libs2/functions.php');
$obj = new Functions("india");

$redirectArr = array(
    'automobileWebARClick' => 'http://alivenow.8thwall.app/car-showroom-ar',
    'indiaKiChaiClick' => 'https://www.alivenow.in/IndiaKiChai/',
    'automobileClick' => 'https://www.alivenow.in/WebAR/example/',
    'alivenowClick' => 'https://www.alivenow.in'
);



$obj->clickUpdater("alivenow_filter_emailer_clicks", 1, $_GET["click_type"]);

header("Location: " . $redirectArr[$_GET["click_type"]]);
die();
