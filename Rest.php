<?php

class Rest
{
    private $name;
    private $image_url;
    private $latitude;
    private $longitude;
    private $address;

    function __construct($name, $image_url, $latitude, $longitude, $address) {
        $this->name = $name;
        $this->image_url = $image_url;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->address = $address;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_image_url() {
        return $this->image_url;
    }

    public function get_latitude() {
        return $this->latitude;
    }

    public function get_longitude() {
        return $this->longitude;
    }

    public function get_address() {
        return $this->address;
    }
}

