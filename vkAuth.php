<?php
include 'vendor/autoload.php';

use VK\Client\VKApiClient;
$vk = new VKApiClient();
$oauth = new VK\OAuth\VKOAuth();
$client_id = 7856501;
$client_secret='aad52533aad52533aad525330eaaa2c446aaad5aad52533ca773ee9776fb683f0204496';
$redirect_uri = 'https://5b19064e8a8f.ngrok.io/phptest/vkAuth.php';
$display = VK\OAuth\VKOAuthDisplay::PAGE;
$scope = [VK\OAuth\Scopes\VKOAuthUserScope::ADS];
$state = 'test';
//$code = '4ZJ4vTDBF3FtxziHaEfo';

//$code = 'CODE';
$browser_url = $oauth->getAuthorizeUrl(VK\OAuth\VKOAuthResponseType::TOKEN, $client_id, $redirect_uri, $display, $scope, $state);
// print_r($browser_url);
// $response = $oauth->getAccessToken($client_id, $client_secret, $redirect_uri, $code);
// print_r($response);
// $access_token = $response['access_token'];
// print_r($access_token);
