<?php

    namespace Waed\DigitalCep;

    class Search{

        private $url = "https://viacep.com.br/ws/";

        public function getAddressFromZipcode($zipcode){

            $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

            $get = file_get_contents($this->url . $zipcode . "/json/");

            return json_decode($get, true);
        }
    }


?>