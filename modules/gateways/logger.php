<?php
 if(!class_exists('Islandsvefir_Logger')) :
     class Islandsvefir_Logger
     {
         private $time;



         /**
          * @param mixed $time
          */
         private function setTime($time)
         {
             $this->time = $time;
         }

         public function __construct()
         {
             $this->setTime(date('Y-m-d::H-i-s'));
         }


         public function write($data)
         {
            if(!$data) {
                return false;
            }
             $data = array(
                 'Time'=> $this->time,
                 'Data' => $data
             );
            if(is_array($data)||is_object($data)) {
                $data = json_encode($data);
            }

             $file = fopen('log.txt','a');
             echo fwrite($file,$data);
             fclose($file);

             return true;
         }
     }
     endif;