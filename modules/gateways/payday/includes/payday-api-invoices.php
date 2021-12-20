<?php

if(!class_exists('Payday_Api_Invoices')):
    class Payday_Api_Invoices
    {
        private $api_request;
        private $url_endpoint;

        public function __construct($token)
        {
            $this->api_request = new Payday_Api_Request($token);
            $this->url_endpoint = 'invoices';
        }

        public function get_by_id($id)
        {
            if (empty($id)) {
                return false;
            }
            $url = $this->url_endpoint . '/' . $id . '?include=lines';
            $response = $this->api_request->get($url);
            return $response;
        }

        public function create($customer_id)
        {
            if(empty($customer_id)) {
                return false;
            }

        }
    }
endif;