# Enom Php Api 


```
$enom = new neoistone\Enom\api('username', 'password','response type json or xml','live api or test api (option param)');
```

```
$enom->command('command name ','parameters in array');
```

```
// print response
echo $enom->run();
```

## Examples ##
### Live API ###
```
$enom = new neoistone\Enom\api('username','password','response type json or xml');
$enom->command('check',array(
  	'sld' => 'neoistone',
  	'tld' => 'org',
));
echo $enom->run();
```


### Test API ###
```
$enom = new neoistone\Enom\api('username','password','response type json or xml',true);
$enom->command('check',array(
  	'sld' => 'neoistone',
  	'tld' => 'org',
));
echo $enom->run();
```
## Domain Register ##
```
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
```
[More infromtion click here](https://www.enom.com/api/API%20topics/api_Check.htm) | [command list](https://www.enom.com/api/API%20topics/api_Command_Categories.htm)

[About Neoistone](https://www.neoistone.com) | [Neoistone Hosting](https://www.neoistone.com/hosting)
