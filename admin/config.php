<?php
   $servername = "localhost";
   $username = "nexwarea_root";
   $password = "admin";
   $dbname = "nexwarea_printer";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   $sSQL= 'SET CHARACTER SET utf8';

   mysqli_query($conn,$sSQL)
   or die ('Can\'t charset in DataBase');
   function generateToken( $formName )
   {
       $secretKey = 'gsfhs154aergz2#';
       if ( !session_id() ) {
           session_start();
       }
       $sessionId = session_id();

       return sha1( $formName.$sessionId.$secretKey );

   }

   function checkToken( $token, $formName )
   {
       return $token === generateToken( $formName );
   }
?>
