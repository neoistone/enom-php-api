<?php
include __DIR__.'/src/enom.php';

// live api
$enom = new neoistone\Enom\api('username','password','response type json or xml');
  $enom->command(array(
  	'sld' => 'neoistone',
  	'tld' => 'org',
  ),'check');
  echo $enom->run();

//test api

// live api
$enom = new neoistone\Enom\api('username','password','response type json or xml',true);
  $enom->command('check',array(
  	'sld' => 'neoistone',
  	'tld' => 'org',
  ),);
  echo $enom->run();
?>
