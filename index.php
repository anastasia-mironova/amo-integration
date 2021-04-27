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
    $accessToken = getToken($authData);
    //$accessToken = json_decode(file_get_contents(TOKEN_FILE), true);
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

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: GET, POST OPTIONS");
// header("Access-Control-Allow-Headers: *");
// print_r($_SERVER['REQUEST_METHOD']);
//Получаем список сделок в виде массива
$filter = new LeadsFilter();
$temp = $apiClient->leads()->get($filter->set);
print_r($temp);
// try {
//     $leadsArr = $apiClient->leads()->get()->all();

//     // print_r($leadsArr);
//     foreach ($leadsArr as $lead) {
//         //Получим коллекцию значений полей сделки
//         $customFields = $lead->getCustomFieldsValues();
//         //Получим значение поля по его ID
//         foreach ($customFields as $fields) {
//             if (!empty($fields)) {
//                 $textField = $customFields->getBy('fieldId', $fields->fieldId);
//                 $textFieldValueCollection = $textField->getValues();

//                  print_r($fields->fieldName);
//                 echo " ";
//                 print_r($textFieldValueCollection[0]->value);
//                 print_r("<br>");
//             }
//             // print_r("_________________________________");
//             // print_r("<br>");
//         }
//     }
//     // print_r($customFields);
// } catch (AmoCRMoAuthApiException $e) {
//     //Если произошла ошибка аутентификации - возможно токен устарел, пробуем получить новый
//     $accessToken = getToken($authData);
//     die("Неверные данные для аутентификации. Попробуйте изменить их и перезагрузиться. $e");
// } catch (AmoCRMApiException $e) {
//     die($e);
// }
