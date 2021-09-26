<?php 

namespace App\Models;



class Message{
   
       
       
    public function set_message($msg){
         if (!empty($msg)) {
            $_SESSION['message'] = $msg;
         }else{
           $msg = "";
       
         }
       }
       
    public function display_message(){
       
         if (isset($_SESSION['message'])) {
           echo $_SESSION['message'];
           unset($_SESSION['message']);
         }
       
       
       
       }

      }


?>