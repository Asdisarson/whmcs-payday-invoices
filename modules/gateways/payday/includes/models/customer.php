<?php

if(!class_exists('Payday_Customer')):
    class Payday_Customer {
        private $ssn;
        private $name;
        private $email;
        private $language;
        private $address;
        private $zipCode;
        private $city;
        private $country;
        private $contact;
        private $comment;
        private $phone;
        /**
         * @return mixed
         */
        public function get_ssn()
        {
            return $this->ssn;
        }

        /**
         * @param mixed $ssn
         */
        public function set_ssn($ssn)
        {
            $this->ssn = $ssn;
        }

        /**
         * @return mixed
         */
        public function get_name()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function set_name($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function get_email()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function set_email($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function get_language()
        {
            return $this->language;
        }

        /**
         * @param mixed $language
         */
        public function set_language($language)
        {
            $this->language = $language;
        }

        /**
         * @return mixed
         */
        public function get_address()
        {
            return $this->address;
        }

        /**
         * @param mixed $address
         */
        public function set_address($address)
        {
            $this->address = $address;
        }

        /**
         * @return mixed
         */
        public function get_zip_code()
        {
            return $this->zipCode;
        }

        /**
         * @param mixed $zipCode
         */
        public function set_zip_code($zipCode)
        {
            $this->zipCode = $zipCode;
        }

        /**
         * @return mixed
         */
        public function get_city()
        {
            return $this->city;
        }

        /**
         * @param mixed $city
         */
        public function set_city($city)
        {
            $this->city = $city;
        }

        /**
         * @return mixed
         */
        public function get_country()
        {
            return $this->country;
        }

        /**
         * @param mixed $country
         */
        public function set_country($country)
        {
            $this->country = $country;
        }

        /**
         * @return mixed
         */
        public function get_contact()
        {
            return $this->contact;
        }

        /**
         * @param mixed $contact
         */
        public function set_contact($contact)
        {
            $this->contact = $contact;
        }

        /**
         * @return mixed
         */
        public function get_comment()
        {
            return $this->comment;
        }

        /**
         * @param mixed $comment
         */
        public function set_comment($comment)
        {
            $this->comment = $comment;
        }

        /**
         * @return mixed
         */
        public function get_phone()
        {
            return $this->phone;
        }

        /**
         * @param mixed $phone
         */
        public function set_phone($phone)
        {
            $this->phone = $phone;
        }


        public function __construct($ssn, $name, $email)
        {
            $this->set_ssn($ssn);
            $this->set_name($name);
            $this->set_email($email);
        }


    }
endif;