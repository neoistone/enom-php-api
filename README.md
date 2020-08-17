# Enom Php Api 

## live API ## 
```
$enom = new neoistone\Enom\api('username','password','response type json or xml');
enom->command('check',array(
  	'sld' => 'neoistone',
  	'tld' => 'org',
));
echo $enom->run();
```


## test API ## 
```
$enom = new neoistone\Enom\api('username','password','response type json or xml',true);
enom->command('check',array(
  	'sld' => 'neoistone',
  	'tld' => 'org',
));
echo $enom->run();
```
