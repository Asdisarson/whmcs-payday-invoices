<?php

if(!class_exists('Payday_Invoice_Customer')):
    class Payday_Invoice_Customer {
        private $id;

        /**
         * @return mixed
         */
        public function get_id()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function set_id($id)
        {
            $this->id = $id;
        }

        public function __construct($id)
        {
            $this->set_id($id);
        }
    }
endif;