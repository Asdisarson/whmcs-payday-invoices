<?php

if(!class_exists('Payday_Api')):
    class Payday_Api {

    private $auth;

        /**
         * @return mixed
         */
        public function getAuth()
        {
            return $this->auth;
        }

        /**
         * @param mixed $auth
         */
        public function setAuth()
        {
            $this->auth = new Payday_Api_Auth();
        }



    }
endif;
