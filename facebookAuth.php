<?php
include 'vendor/autoload.php';
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Ad;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\AdSet;

$access_token = 'EAAQWWnbBQ4gBACbHRPFbUIbePhm389pYJSyxWqjQZCQq0XxxnTGubjRJxD29xMfKAegooYzGvktnxjm9s0K7ZCsZCMnVoPZChF9rkaoTpRNDGUdZCmyya9BThW8SZBBnsFV7C6JObOWm8C6SUq1qoi92BxpnElsHfEYp0GPZBVjmia1ue7WGdGrqrXiFSFlBW2A0DoNcufW2BrvTcMakCJMMhgaTwCwbCDroLSrZAEYW3AZDZD';
$app_secret = '575d2f40fb551a86b90bcbde48e14362';
$app_id = '1150477702087560';
$id = '<AD_CAMPAIGN_ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

// $fields = array(
//   'name',
// );
// $params = array(
//   'effective_status' => array('ACTIVE'),
// );
// echo json_encode((new Campaign())->getAds(
//   $fields,
//   $params
// )->getResponse()->getContent(), JSON_PRETTY_PRINT);



try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get(
      '...?fields={name}',
      '{EAAQWWnbBQ4gBACbHRPFbUIbePhm389pYJSyxWqjQZCQq0XxxnTGubjRJxD29xMfKAegooYzGvktnxjm9s0K7ZCsZCMnVoPZChF9rkaoTpRNDGUdZCmyya9BThW8SZBBnsFV7C6JObOWm8C6SUq1qoi92BxpnElsHfEYp0GPZBVjmia1ue7WGdGrqrXiFSFlBW2A0DoNcufW2BrvTcMakCJMMhgaTwCwbCDroLSrZAEYW3AZDZD}'
    );
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
  $graphNode = $response->getGraphNode();