<?php
composer require nexmo/client
$basic  = new \Nexmo\Client\Credentials\Basic('71d6dd4c', 'nXIRfrtZZR4bk5xS');
$client = new \Nexmo\Client($basic);

    $telephone = array();
      foreach ($POST as $key => $value) {
        if ($key !='message') {
        $telephone.array_push($value);
        }
        else $message=$value;
      }
      foreach ($telephone as $key => $value) {
        $message = $client->message()->send([
            'to' => $value,
            'from' => 'SCALE ECHIROLLE',
            'text' => $message
            ]);
      }

      }







]);

 ?>
