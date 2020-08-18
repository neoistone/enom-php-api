<?php

include __DIR__.'/../src/enom.php';

$enom = new neoistone\Enom\api('username', 'password','response type json or xml','live api or test api (option param)');
$enom->command('Purchase',array(
  'domain_name' => 'net',
  'RegistrantOrganizationName' => 'company name',
  'RegistrantFirstName' => 'first name',
  'RegistrantAddress1' => ' costumer adderss',
  'RegistrantCity' => ' costumer city',
  'RegistrantStateProvinceChoice' => 'costumer state',
  'RegistrantCountry' => 'costumer country',
  'RegistrantEmailAddress' => 'costumer@email.com',
  'RegistrantPhone' => '+1 1234567890',
  'RegistrantFax' => '1234567890',
));
echo $enom->run();
?>
