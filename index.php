<?php
  require_once "./vendor/autoload.php";


  $client = new GetStream\StreamChat\Client(getenv("STREAM_API_KEY"), getenv("STREAM_API_SECRET"));

  $token = $client->createToken("katy");
  
  $client->setLocation("us-east");

  // echo($client);
  echo("this is working");

?>