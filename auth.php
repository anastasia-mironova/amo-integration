<?php
require_once 'vendor/autoload.php';

use AmoCRM\Client\AmoCRMApiClient;
use AmoCRM\Exceptions\AmoCRMApiException;
use AmoCRM\Exceptions\AmoCRMApiNoContentException;
use AmoCRM\Exceptions\AmoCRMoAuthApiException;
use AmoCRM\Helpers\EntityTypesInterface;
use League\OAuth2\Client\Token\AccessToken;
use AmoCRM\Collections\TasksCollection;
use AmoCRM\Models\TaskModel;
use \AmoCRM\Models\CustomFieldsValues\ValueModels;
use \AmoCRM\Models\CustomFieldsValues\ValueCollections;
use AmoCRM\Filters\LeadsFilter;
use AmoCRM\Models\WebhookModel;


define('DATA_FILE', 'data_info.json');
//15.04.2021
define('TOKEN_FILE', 'token_info.json');

require_once "authorize.php";
/*
     * Перед началом работы с программой необзходимо записать свои данные интеграции в файл data_info.json.
     */
/*

*/
function auth()
{
    //Проверяем наличие файлов с аутентификационными данными
    if ((!file_exists(DATA_FILE)) or (!file_exists(TOKEN_FILE))) {
        exit('Data file or Token file not found');
    }
    //Считываем эти данные в массив
    $authData = json_decode(file_get_contents(DATA_FILE), true);
    //Валидируем данные
    if (!(isset($authData)
        && isset($authData['client_id'])
        && isset($authData['client_secret'])
        && isset($authData['grant_type'])
        && isset($authData['code'])
        && isset($authData['redirect_uri'])
        && isset($authData['baseDomain']))) {
        die("Установите данные для аутентификации в файле data_info.json");
    }

    $accessToken = json_decode(file_get_contents(TOKEN_FILE), true);
    if (!(isset($accessToken)
        && isset($accessToken['access_token'])
        && isset($accessToken['refresh_token'])
        && isset($accessToken['expires_in']))) {
        // $accessToken = getToken($authData);
        $accessToken = json_decode(file_get_contents(TOKEN_FILE), true);
    }
    $apiClient = new AmoCRMApiClient($authData['client_id'], $authData['client_secret'], $authData['redirect_uri']);
    $apiClient->setAccountBaseDomain($authData['baseDomain']);


    //устанавливаем токены нашему соединению
    $apiClient->setAccessToken(new AccessToken([
        'access_token' => $accessToken['access_token'],
        'refresh_token' => $accessToken['refresh_token'],
        'expires' => $accessToken['expires_in'],
        'baseDomain' => $authData['baseDomain'],
    ]));


   return $apiClient;

}
