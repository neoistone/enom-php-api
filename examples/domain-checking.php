<?php

include __DIR__.'/../src/enom.php';

$enom = new neoistone\Enom\api('username', 'password','response type json or xml','live api or test api (option param)');
$enom->command();
?>
