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

        public function create($invoice)
        {
            if(!is_a($invoice,'Payday_Invoice')) {
                return false;
            }
           $response = $this->api_request->post($this->url_endpoint, $invoice);
            return $response;
        }

        public function update($invoiceId, $invoiceStatus) {
            if(empty($invoiceId)||empty($invoiceStatus)) {
                return false;
            }
            $url = $this->url_endpoint . '/' . $invoiceId;
            $response = $this->api_request->put($url, $invoiceStatus);
            return $response;
        }
        /*Todo
        Change parameter $invoiceStatus
        */
        public function cancel($invoiceId) {
            if(empty($invoiceId)) {
                return false;
            }
            $invoiceStatus = 'Cancel';
            $response = $this->update($invoiceId,$invoiceStatus);
            return $response;
        }

    /*Todo
    Change parameter $invoiceStatus
    */
    public function resend_email($invoiceId) {
    if(empty($invoiceId)) {
        return false;
    }
    $invoiceStatus = 'Resend Email';
    $response = $this->update($invoiceId,$invoiceStatus);
    return $response;
}
}
endif;