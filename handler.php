<html>
<form action="./" method="get">
  <input type='submit' value='Back' />
</form>
<?php
 
  include 'extras.php';

  $decode = $_POST["decode"];  
  $encode = $_POST["encode"];  

  $passphrase = $_POST["passphrase"]; 
  $key = $_POST["key"];  
  $ver = $_POST["ver"];  


$keymaterial = NexoDeriveKeyMaterial($passphrase);

if(!empty($encode)){    
    $outmessage = NexoSender($encode, $key, 0, $keymaterial);
    echo '<br/><b>Encrypted request:    </b><br/>' . _format_json($outmessage,true);
}

if(!empty($decode)){
      $message = NexoReceiver($decode,$keymaterial);
      echo '<BR/><b>Unencrypted Response:    </b><br/>' . _format_json($message,true);
}



    // $keymaterial= implode( $keymaterial );
    // $hex = bin2hex($keymaterial);   
    // print_r($hex);


    // // $outmessage = NexoSender($Data, 'mykey', 0, $keymaterial);
    // echo '<b>Encrypted Request::</b> <br/>'._format_json($outmessage,true);
    // echo "<br/><br/><br/>";



    //   $message = NexoReceiver($decode);
    //    echo '<b>Unencrypted Response:    </b><br/>' . _format_json($message,true);


   //echo '<b>data request:    </b><br/>' .$Data;
  //echo "<br/>=====================<br/>";
   //  // echo $header;
   //  echo "<br/><br/><br/>";



    //  $message = NexoReceiver($Data);
     // echo '<b>Unencrypted Response:    </b><br/>' . _format_json($message,true);
   

   
   // close cURL resource, and free up system resources
    // curl_multi_close($ch);

?>