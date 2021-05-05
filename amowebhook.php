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
//Проверяем наличие файлов с аутентификационными данными


// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: GET, POST OPTIONS");
// header("Access-Control-Allow-Headers: *");
// print_r($_SERVER['REQUEST_METHOD']);
//Получаем список сделок в виде массива
// $filter = new LeadsFilter();

print_r($_POST);
if (isset($_POST['leads'])) {

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
    $leads = $_POST['leads']['add'][0];
    $leadId = $leads['id'];


    $gottenLead = $apiClient->leads()->getOne($leadId);


    $customFields = $gottenLead->getCustomFieldsValues();

    if (!empty($customFields)) {
        $textField = $customFields->getBy('fieldId', 342065);
        $GOOOGLEID = $textField->getValues()[0]->value;
        print_r($textField);
        echo " 
    _______________________________";
        print_r($GOOOGLEID);
        print_r("<br>");
        $paramsArray = [
            'v' => 1,
            'tid' => 'UA-163765043-2',
            'cid' => $GOOOGLEID,
            't' => 'event',
            'ec' => 'amo_chat',
            'ea' => 'send_message'
        ];

        $x  = http_build_query($paramsArray);
        $myCurl  = curl_init();
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        curl_setopt($myCurl, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($myCurl, CURLOPT_URL, "https://www.google-analytics.com/collect");
        curl_setopt($myCurl, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded'));
        curl_setopt($myCurl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($myCurl, CURLOPT_POST, TRUE);
        curl_setopt($myCurl, CURLOPT_POSTFIELDS, $x);
        curl_setopt($myCurl, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($myCurl);
        print_r($server_output);
        curl_close($myCurl);
    } else{
        return 'нет googleID';
    }
} else {
    echo 'error';
}
