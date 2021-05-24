<?php
include 'vendor/autoload.php';

use VK\Client\VKApiClient;
// $client_id = 7858205; // ID приложения
$client_secret = 'B36lQXNywqJJdHZ3zNrx'; // Защищённый ключ
//$redirect_uri = 'https://76faf3503a10.ngrok.io/phptest/vkAuth.php'; // Адрес сайта
$vk = new VKApiClient('5.101');
$oauth = new VK\OAuth\VKOAuth();
$client_id = 7858235;
$redirect_uri = 'https://76faf3503a10.ngrok.io/phptest/vkAuth.php';
$display = VK\OAuth\VKOAuthDisplay::POPUP;
$scope = [VK\OAuth\Scopes\VKOAuthUserScope::ADS];
$state = 'auth';
$browser_url = $oauth->getAuthorizeUrl(VK\OAuth\VKOAuthResponseType::CODE, $client_id, $redirect_uri, $display, $scope, $state);
echo '<a href="' . $browser_url . '">Разрешение доступа</a>';
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    echo $code;
}


try {
    $response = $oauth->getAccessToken($client_id, $client_secret, $redirect_uri, $code);
    $access_token = $response['access_token'];
    print_r($response);
    echo '<br>';
    $response = $vk->ads()->getCampaigns($access_token, [
        'account_id'  => 1606366398,
        'include_deleted'    => 0,
    ]);
    foreach ($response as $res) {
        print_r($res);
        echo '<br>';
        echo '<br>';
    }
} catch (Exception $e) {
    echo '<br>';
    echo 'Нажмите на ссылку разрешения доступа';
}
