<?php 
  
    define('TOKEN_FILE', 'token_info.json');
    define('DATA_FILE', 'data_info.json');
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
   
}

$subdomain = $authData['baseDomain']; //Поддомен нужного аккаунта
$link = 'https://' . $subdomain . '.amocrm.ru/oauth2/access_token'; //Формируем URL для запроса

/** Соберем данные для запроса */
$data = [
	'client_id' => $authData['client_id'],
	'client_secret' => $authData['client_secret'],
	'grant_type' => 'refresh_token',
	'refresh_token' => $accessToken['refresh_token'],
	'redirect_uri' => $authData['redirect_uri']
];
print_r($data);

$curl = curl_init(); //Сохраняем дескриптор сеанса cURL
/** Устанавливаем необходимые опции для сеанса cURL  */
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
curl_setopt($curl,CURLOPT_URL, $link);
curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
curl_setopt($curl,CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_VERBOSE,true);
curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
// curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
// curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);    
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
curl_setopt($curl, CURLOPT_DNS_CACHE_TIMEOUT, 2 );
$out = curl_exec($curl); //Инициируем запрос к API и сохраняем ответ в переменную
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
/** Теперь мы можем обработать ответ, полученный от сервера. Это пример. Вы можете обработать данные своим способом. */
$code = (int)$code;
$errors = [
	400 => 'Bad request',
	401 => 'Unauthorized',
	403 => 'Forbidden',
	404 => 'Not found',
	500 => 'Internal server error',
	502 => 'Bad gateway',
	503 => 'Service unavailable',
];

try
{
	/** Если код ответа не успешный - возвращаем сообщение об ошибке  */
	if ($code < 200 || $code > 204) {
		throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undefined error', $code);
	}
}
catch(\Exception $e)
{
	die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
}
file_put_contents('TOKEN_FILE', json_encode($out));
