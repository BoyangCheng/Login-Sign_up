<?php
   class Test extends CI_Controller {

      public function fuck() {
         echo "Hello World!";
      }
      public function one(){
        echo "fuck world";
      }
      public function two(){
        $this->load->view('one');
      }
   }
?>
