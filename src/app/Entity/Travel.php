<?php

namespace src\app\Entity;

use src\api\Api;

class Travel
{

    /**
     * @param $data
     * @return mixed
     */
    static function get($data): array
    {
        $api = new Api();
        return json_decode($api->post('api/cards', $data));
    }

}
