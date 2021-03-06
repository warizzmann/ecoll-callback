<?php

namespace ecoll\callback;

use Yii;
use yii\web\Controller;

class Callback extends \yii\base\Widget
{
    function __construct()
    {
        Yii::$app->controller->enableCsrfValidation = false;
    }

    /**
     * Parsing data request callback ecollection
     *
     * @param string $BniHashingClass
     * @param string $raw_data
     * @param string $secret_key
     * @return array|null
     */
    public function parseData($BniHashingClass, $raw_data, $secret_key)
    {
        $result = null;

        $json_data = json_decode($raw_data, true);
        $client_id = $json_data['client_id'];

        return $BniHashingClass::parseData($json_data['data'], $client_id, $secret_key);;
    }
}
