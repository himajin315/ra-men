<?php

class Rest
{
    private $name;
    private $image_url;
    private $page_url;
    private $latitude;
    private $longitude;
    private $address;
    private $prefname;

    function __construct($name, $image_url, $page_url, $latitude, $longitude, $address, $prefname) {
        $this->name = $name;
        $this->image_url = $image_url;
        $this->page_url = $page_url;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->address = $address;
        $this->prefname = $prefname;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_image_url() {
        return $this->image_url;
    }

    public function get_page_url() {
        return $this->page_url;
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

    public function get_pref_name() {
        return $this->prefname;
    }
}

