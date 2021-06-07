<?php

function OpenCon()
{
   $hostname = "localhost";

   $user_name = "root";
   $password = "Apple$123";
   $db = "24delivery";

   /*$user_name = "u246501751_24delivery";
   $password = "Apple$123";
   $db = "u246501751_24delivery";*/
   
   $conn = new mysqli($hostname, $user_name, $password, $db) or die("Connect failed: %s\n" . $conn->error);

   return $conn;
}

function CloseCon($conn)
{
   $conn->close();
}
