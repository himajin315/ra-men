<?php

require_once "Rest.php";

class Gurunavi
{
    private $app_id;
    private $api_url;
    private $word;

    function __construct() {
        # base
        $this->api_url = "http://api.gnavi.co.jp/ver1/RestSearchAPI/?keyid=82d5789ddbe14a694347e9094a95d58f&freeword=";
        $this->word = urlencode("ラーメン");
    }

    public function search() {
        $base_request_url = $this->api_url. $this->word;
        $rest_num = $this->get_rest_num($base_request_url);
        $request_url = $base_request_url . "&hit_per_page=". 1000;
        $xml = simplexml_load_file($request_url);
        return $this->modeling($xml->rest);
    }

    private function get_rest_num($request_url) {
        $xml = simplexml_load_file($request_url);
        return $xml->total_hit_count;
    }

    private function modeling($rest) {
        $rest_array = array();
        foreach ($rest as $rest_data) {
            $name = $rest_data->name;
            $image_url = $rest_data->image_url->shop_image1;
            $latitude = $rest_data->latitude;
            $longitude = $rest_data->longitude;
            $address = $rest_data->address;

            array_push($rest_array, new Rest($name, $image_url, $latitude, $longitude, $address));
        }

        return $rest_array;
    }
}

