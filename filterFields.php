<?php
function filterFields($data)
{
    $json = file_get_contents("fields.json");
    $jsonDecocdedField = json_decode($json, true);
    $requiredFieldValue = array();
    if (isset($data)) {
        foreach ($data as $field) {
            foreach ($jsonDecocdedField as $jsonField) {
                if ($field['name'] == $jsonField) {
                    $requiredFieldValue[] = array('name' => $field['name'], 'value' => $field['values'][0]['value']);
                }
            }
        }
    }

    return $requiredFieldValue;
};

function countValue($data)
{
    $res = filterFields($data);
    // echo 'res';
    print_r($res);
    // $socialNetworks = array(
    //     0 => array('column' => 'yandex', 'name' => 'yandex', 'count' => 0,),
    //     1 => array('column' => 'google', 'name' => 'google', 'count' => 0),
    //     2 => array('column' => 'instagram', 'name' => 'instagram', 'count' => 0),
    //     3 => array('column' => 'facebook', 'name' => 'facebook', 'count' => 0),
    //     4 => array('column' => 'odnoklassniki', 'name' => 'odnoklassniki', 'count' => 0),
    //     5 => array('column' => 'vkontakte', 'name' => 'vkontakte', 'count' => 0),
    //     6 => array('column' => 'email', 'name' => 'email', 'count' => 0),
    //     7 => array('column' => 'doublegis', 'name' => '2ГИС', 'count' => 0),
    //     8 => array('column' => 'doublegis', 'name' => '2gis', 'count' => 2),
    //     9 => array('column' => 'direct', 'name' => 'direct', 'count' => 0),
    //     10 => array('column' => 'Google my business + Google maps', 'name' => 'Гугл мой бизнес + Гугл карты', 'count' => 0),
    //     11 => array('column' => 'Yandex directory + Yandex maps', 'name' => 'Яндекс справочник + Яндекс карты', 'count' => 0),
    //     12 => array('column' => 'unrecognized', 'name' => 'unrecognized', 'count' => 0)
    // );
    // $trafficMoodels = array(
    //     0 => array('name' => 'cp', 'count' => 0, 'prefix' => '/cpa'),
    //     1 => array('name' => 'social', 'count' => 0, 'prefix' => '/social'),
    //     2 => array('name' => 'organic', 'count' => 0, 'prefix' => '/organic'),
    //     3 => array('name' => 'search', 'count' => 0, 'prefix' => '/organic')
    // );
    $socialNetworks = json_decode(file_get_contents('fieldsValue.json'), true);
    $trafficMoodels = json_decode(file_get_contents('type.json'), true);

    $isUnrecignized = true;

    if (!empty($res)) {
        foreach ($res as $field) {
            foreach ($socialNetworks as &$networkValue) {
                if (!empty(stristr($field['value'], $networkValue['name']))) {
                    $networkValue['count'] += 1;
                    $isUnrecignized = false;
                    break;
                } else {
                    foreach ($trafficMoodels as &$trafficModel) {

                        if (stristr($field['value'], $trafficModel['name'])) {
                            $trafficModel['count'] += 1;
                            $isUnrecignized = false;
                            break;
                        } else {
                            $isUnrecignized = true;
                        }
                    }
                }
            }
        }
        if ($isUnrecignized) {
            $socialNetworks[count($socialNetworks) - 1]['count'] += 1;
        }
    } else {
        $socialNetworks[count($socialNetworks) - 1]['count'] += 1;
    }
    

    $newresult = array();
    foreach ($socialNetworks as &$networkValue) {

        if ($networkValue['count'] > 0) {

            if (key($socialNetworks) < 6) {

                foreach ($trafficMoodels as &$trafficModel) {

                    if ($networkValue['count'] > 0 and $trafficModel['count'] > 0) {

                        $newresult[] = $networkValue['column'] . $trafficModel['prefix'];
                        break;
                    }
                }
            } else {
                $newresult[] =  $networkValue['column'];
            }
        } else {
            next($socialNetworks);
            continue;
        }
        next($socialNetworks);
    }
    // print_r($socialNetworks);
    // print_r($trafficMoodels);
    // print_r($newresult);
    return $newresult;
}

function columnOfDeletedFields($id)
{
    $file = 'log.json';
    $json = file_get_contents($file);
    $jsonDecocded = json_decode($json, true);
   
    foreach ($jsonDecocded as $lead) {
        if ($lead['type'] == 'add' and $lead['id'] == $id) {
            //print_r(array('date'=>$lead['date'], 'column'=>$lead['column']));
            return array('date'=>date("Y-m-d", strtotime($lead['date'])), 'column'=>$lead['column']);
        }
    }
}
