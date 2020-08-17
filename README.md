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
