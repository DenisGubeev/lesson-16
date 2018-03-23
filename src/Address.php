<?php
require_once ;
class Address
{
    public function findCoords($address)
    {
        $api = new \Yandex\Geo\Api;
        $api->setQuery($address);
        $api
            ->setLang(\Yandex\Geo\Api::LANG_RU) // локаль ответа
            ->load();
        $response = $api->getResponse();
        return $response->getList();
    }
}
