<?php 
   
   if(isset($_POST))
   {
      $data = file_get_contents("php://input");
      $result = json_decode($data, true);
      
      // do whatever we want with the users array.
      for ($i = 0, $n = count($result); $i < $n ; $i++)
      {
      	echo implode($result[$i]) . "\r\n";
      }
   }

?>