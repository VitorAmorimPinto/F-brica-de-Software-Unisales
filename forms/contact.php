<?php
header('Content-type: text/html; charset=utf-8');
  
        $email = $_POST["email"];
        $subject =$_POST["subject"] ;
        $message =utf8_decode($_POST["message"]);
      
                
        $headers = 'From: fabrica.software@unisales.br' . "\r\n" .
            'Reply-To:'."$email". "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        try{
        mail("fabrica.software@salesiano.br", $subject, $message, $headers);
        }catch(Exception $e){
            echo $e->getMessage();
        }

?>
