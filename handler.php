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
  $ver = (int)$_POST["ver"];  


$keymaterial = NexoDeriveKeyMaterial($passphrase);

if(!empty($encode)){    
    $outmessage = NexoSender($encode, $key, $ver, $keymaterial);
    echo '<br/><b>Encrypted request:    </b><br/>' . _format_json($outmessage,true);
}

if(!empty($decode)){
      $message = NexoReceiver($decode,$keymaterial);
      echo '<BR/><b>Unencrypted Response:    </b><br/>' . _format_json($message,true);
}

?>
