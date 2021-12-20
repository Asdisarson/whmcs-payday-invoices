<?php

if(!class_exists('Payday_Invoice_Lines')):
    class Payday_Invoice_Lines {
        private $description;
        private $quantity;
        private $vatPercentage;
        private $discountPercentage;

        /**
         * @return mixed
         */
        public function get_description()
        {
            return $this->description;
        }

        /**
         * @param mixed $description
         */
        public function set_description($description)
        {
            $this->description = $description;
        }

        /**
         * @return mixed
         */
        public function get_quantity()
        {
            return $this->quantity;
        }

        /**
         * @param mixed $quantity
         */
        public function set_quantity($quantity)
        {
            $this->quantity = $quantity;
        }

        /**
         * @return mixed
         */
        public function get_vat_percentage()
        {
            return $this->vatPercentage;
        }

        /**
         * @param mixed $vatPercentage
         */
        public function set_vat_percentage($vatPercentage)
        {
            $this->vatPercentage = $vatPercentage;
        }

        /**
         * @return mixed
         */
        public function get_discount_percentage()
        {
            return $this->discountPercentage;
        }

        /**
         * @param mixed $discountPercentage
         */
        public function set_discount_percentage($discountPercentage)
        {
            $this->discountPercentage = $discountPercentage;
        }

        /**
         * @return mixed
         */
        public function get_unit_price_excluding_vat()
        {
            return $this->unitPriceExcludingVat;
        }

        /**
         * @param mixed $unitPriceExcludingVat
         */
        public function set_unit_price_excluding_vat($unitPriceExcludingVat)
        {
            $this->unitPriceExcludingVat = $unitPriceExcludingVat;
        }

        /**
         * @return mixed
         */
        public function get_unit_price_including_vat()
        {
            return $this->unitPriceIncludingVat;
        }

        /**
         * @param mixed $unitPriceIncludingVat
         */
        public function set_unit_price_including_vat($unitPriceIncludingVat)
        {
            $this->unitPriceIncludingVat = $unitPriceIncludingVat;
        }

        private $unitPriceExcludingVat;
        private $unitPriceIncludingVat;

        public function __construct($description, $quantity, $vatPercentage, $discountPercentage)
        {
            $this->set_description($description);
            $this->set_quantity($quantity);
            $this->set_discount_percentage($discountPercentage);
            $this->set_vat_percentage($vatPercentage);
        }
    }
endif;