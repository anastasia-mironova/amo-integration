<?php
/*

*/
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
/*

*/
function countValue($data)
{
    $res = filterFields($data);
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
    return $newresult;
}
    /*

  */
function columnOfDeletedFields($id)
{   
    $file = 'log.json';
    $json = file_get_contents($file);
    $jsonDecocded = json_decode($json, true);
   
    foreach ($jsonDecocded as $lead) {
        if ($lead['type'] == 'add' and $lead['id'] == $id) {
            return array('date'=>date("Y-m-d", strtotime($lead['date'])), 'column'=>$lead['column']);
        }
    }
}
