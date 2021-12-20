<?php
if(!class_exists('Payday_Invoice')):
    class Payday_Invoice {
        private $customer;
        private $invoiceDate;
        private $dueDate;
        private $finalDueDate;
        private $lines;
        private $currencyCode;

        /**
         * @param mixed $customer
         */
        public function set_customer($customer_id)
        {
            $this->customer = new Payday_Invoice_Customer($customer_id);
        }

        /**
         * @param mixed $lines
         */
        public function set_lines($lines)
        {
            $this->lines = $lines;
        }
        private $createClaim;
        private $createElectronicInvoice;
        private $electronicInvoicePartyId;
        private $accountingCost;
        private $sendEmail;
        private $paidDate;
        private $paymentType;

        /**
         * @return mixed
         */
        public function get_invoice_date()
        {
            return $this->invoiceDate;
        }

        /**
         * @param mixed $invoiceDate
         */
        public function set_invoice_date($invoiceDate)
        {
            $this->invoiceDate = $invoiceDate;
        }

        /**
         * @return mixed
         */
        public function get_due_date()
        {
            return $this->dueDate;
        }

        /**
         * @param mixed $dueDate
         */
        public function set_due_date($dueDate)
        {
            $this->dueDate = $dueDate;
        }

        /**
         * @return mixed
         */
        public function get_final_due_date()
        {
            return $this->finalDueDate;
        }

        /**
         * @param mixed $finalDueDate
         */
        public function set_final_due_date($finalDueDate)
        {
            $this->finalDueDate = $finalDueDate;
        }

        /**
         * @return mixed
         */
        public function get_currency_code()
        {
            return $this->currencyCode;
        }

        /**
         * @param mixed $currencyCode
         */
        public function set_currency_code($currencyCode)
        {
            $this->currencyCode = $currencyCode;
        }

        /**
         * @return mixed
         */
        public function get_create_claim()
        {
            return $this->createClaim;
        }

        /**
         * @param mixed $createClaim
         */
        public function set_create_claim($createClaim)
        {
            $this->createClaim = $createClaim;
        }

        /**
         * @return mixed
         */
        public function get_create_electronic_invoice()
        {
            return $this->createElectronicInvoice;
        }

        /**
         * @param mixed $createElectronicInvoice
         */
        public function set_create_electronic_invoice($createElectronicInvoice)
        {
            $this->createElectronicInvoice = $createElectronicInvoice;
        }

        /**
         * @return mixed
         */
        public function get_electronic_invoice_party_id()
        {
            return $this->electronicInvoicePartyId;
        }

        /**
         * @param mixed $electronicInvoicePartyId
         */
        public function set_electronic_invoice_party_id($electronicInvoicePartyId)
        {
            $this->electronicInvoicePartyId = $electronicInvoicePartyId;
        }

        /**
         * @return mixed
         */
        public function get_accounting_cost()
        {
            return $this->accountingCost;
        }

        /**
         * @param mixed $accountingCost
         */
        public function set_accounting_cost($accountingCost)
        {
            $this->accountingCost = $accountingCost;
        }

        /**
         * @return mixed
         */
        public function get_send_email()
        {
            return $this->sendEmail;
        }

        /**
         * @param mixed $sendEmail
         */
        public function set_send_email($sendEmail)
        {
            $this->sendEmail = $sendEmail;
        }

        /**
         * @return mixed
         */
        public function get_paid_date()
        {
            return $this->paidDate;
        }

        /**
         * @param mixed $paidDate
         */
        public function set_paid_date($paidDate)
        {
            $this->paidDate = $paidDate;
        }

        /**
         * @return mixed
         */
        public function get_payment_type()
        {
            return $this->paymentType;
        }

        /**
         * @param mixed $paymentType
         */
        public function set_payment_type($paymentType)
        {
            $this->paymentType = $paymentType;
        }

        /**
         * @return mixed
         */
        public function get_customer()
        {
            return $this->customer;
        }

        /**
         * @return mixed
         */
        public function get_lines()
        {
            return $this->lines;
        }

        public function __construct($customer_id, $invoiceDate, $dueDate, $finalDueDate, $lines ,$currencyCode = 'ISK')
        {
            $this->set_customer($customer_id);
            $this->set_lines($lines);
            $this->set_invoice_date($invoiceDate);
            $this->set_due_date($dueDate);
            $this->set_final_due_date($finalDueDate);
            $this->set_currency_code($currencyCode);
        }

    }
endif;