<?php
 if(!class_exists('Payday_Api_Request')):
     class Payday_Api_Request
     {
         private $baseUrl = '';
         private $token = '';
         private $development = true;
         private $log;
         public function __construct($token, $baseUrl = 'https://app.staging.payday.is')
         {
             if(!$this->development) {
                 $baseUrl = 'https://api.payday.is/';
             }
                 $this->log = new Islandsvefir_Logger(
                 );
             $this->baseUrl = $baseUrl;
             $this->token = $token;
         }

         public function get($endpoint, $postfields = array())
         {
             if (empty($endpoint) || $endpoint == '') {
                 return false;
             }
             $this->request($endpoint,$postfields,'GET');
         }

         public function post($endpoint, $postfields = array())
         {
             if (empty($endpoint) || $endpoint == '') {
                 return false;
             }
             $this->request($endpoint,$postfields,'POST');
         }
         public function put($endpoint, $postfields = array())
         {
             if (empty($endpoint) || $endpoint == '') {
                 return false;
             }
             $this->request($endpoint,$postfields,'PUT');
         }
         public function delete($endpoint, $postfields = array())
         {
             if (empty($endpoint) || $endpoint == '') {
                 return false;
             }
             $this->request($endpoint,$postfields,'DELETE');
         }

         private function request( $endpoint, $params = array(), $method = 'GET' ) {

             if($this->token==''||empty($this->token)) {
                return array();
             }
             $response = array();
             $curl     = curl_init();
             $headers  = array(
                 'Content-Type: application/json',
                 'Authorization: bearer ' . $this->token,
             );

             $url          = $this->baseUrl . $endpoint;
             $curl_options = array(
                 CURLOPT_URL            => $url,
                 CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_ENCODING       => "",
                 CURLOPT_MAXREDIRS      => 10,
                 CURLOPT_TIMEOUT        => 0,
                 CURLOPT_FOLLOWLOCATION => true,
                 CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                 CURLOPT_CUSTOMREQUEST  => $method,
                 CURLOPT_HTTPHEADER     => $headers,
             );


             $methods = array(
                 'PUT',
                 'POST',
                 'DELETE',
             );

             if ( in_array( $method, $methods ) && count( $params ) > 0 ) {

                 $postfields                         = $params;
                 $postfields_json                    = json_encode( $postfields );
                 $curl_options[ CURLOPT_POSTFIELDS ] = $postfields_json;


             }
             curl_setopt_array( $curl, $curl_options );

             $result             = curl_exec( $curl );


             $response['result'] = json_decode( $result, true );
             if ( curl_errno( $curl ) ) {
                 $response['error'] = curl_error( $curl );
             } else {
                 $response['http_code'] = curl_getinfo( $curl, CURLINFO_HTTP_CODE );
             }
             curl_close( $curl );
             if(($response['http_code'] >= 400)||isset($response['error'])||$this->development) {
                     $this->log->write(
                         array(
                             'request' => array(
                                 'url' => $url,
                                 'method' => $method,
                                 'params' => $params,
                                 'response' => array(
                                     'code' => curl_getinfo( $curl, CURLINFO_HTTP_CODE ),
                                     'result' => json_decode($result, true)
                                 )
                             )
                         )
                     );
                     return false;
                 }


             return $response['result'];

     }
     }
 endif;