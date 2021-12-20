<?php
/*
 * string language optional
string ssn optional If not set then a foreign customer is created
string name required if ssn is not set otherwise ignored
string address optional
string zipCode optional
string city optional
string country optional
string email required
string contact optional
string comment optional
string phone optional
 */
if(!class_exists('Payday_Api_Customer')):
    class Payday_Api_Customer {

        private $api_request;
        private $url_endpoint;
        public function __construct($token)
        {
            $this->api_request = new Payday_Api_Request($token);
            $this->url_endpoint = 'customer';
        }

        public function get_single($id)
        {
            if(empty($id)) {
                return false;
            }
            $endpoint = $this->url_endpoint . '/' . $id;
            $response = $this->api_request->get($endpoint);
            return $response;
        }

        public function create($customer)
        {
            if(!is_a($customer,'Payday_Customer')) {
                return false;
            }
           $response = $this->api_request->post($this->url_endpoint, $customer);
            return $response;
        }

    }
endif;
