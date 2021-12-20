<?php
if(!class_exists('Payday_Api_Auth')):
    class Payday_Api_Auth {

        private $clientId;

        /**
         * @param mixed $clientId
         */
        private function setClientId($clientId)
        {
            $this->clientId = $clientId;
        }

        private $clientSecret;

        /**
         * @param mixed $clientSecret
         */
        private function setClientSecret($clientSecret)
        {
            $this->clientSecret = $clientSecret;
        }

        private $token;

        /**
         * @param mixed $token
         */
        private function setToken($token)
        {
            $this->token = $token;
        }

        /**
         * @return mixed
         */
        public function getToken()
        {
            return $this->token;
        }

        public function __construct()
        {
            $this->setToken(false);
            $this->setClientId('');
            $this->setClientSecret('');
        }

        private function create_token()
        {
            if($this->clientId||$this->clientSecret) {
                $url = 'https://api.staging.payday.is/auth/token';

                $headers = 'Content-Type: application/json';
                $postfields = array(
                    'cliendId' => $this->clientId,
                    'clientSecret' => $this->clientSecret
                );

                $postfields_json = json_encode($postfields);

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postfields_json,
                    CURLOPT_HTTPHEADER => $headers
                ));

                $result = curl_exec($curl);
                $response['result'] = json_decode($result);
                if ( curl_errno( $curl ) ) {
                    $response['error'] = curl_error( $curl );
                }
                else {
                    $response['http_code'] = curl_getinfo( $curl, CURLINFO_HTTP_CODE );
                }
                curl_close($curl);
                if($response['http_code'] == 200) {
                    if(!empty($response['result']['accessToken'])){
                        $this->setToken($response['result']['accessToken']);
                        return true;
                    }
                }
                return false;
            }
        }
        public function clearToken() {
            $this->setToken(false);
            return false;
        }
    }
endif;