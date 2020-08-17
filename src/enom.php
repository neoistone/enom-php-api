<?php

/**
 * Enom api neoistone devloped version 
 */
namespace neoistone\Enom;

class api
{
	private $api = '.enom.com/interface.asp?';
    private $error;

	function __construct($username,$password,$response_type,$mode = '')
	{
		if(!$mode) $this->api = 'https://reseller'.$this->api; else $this->api = 'https://resellertest'.$this->api;
		$this->api .= 'uid='.$username.'&pw='.$password."&responsetype=".$response_type;

	}

	public function command(){
		if(!func_num_args() == 2){ $this->error = 'params not empty'; } else {
		$x = func_get_args();
		//decting params corret way
		if(is_array($x['0'])){ $params = $x['0'];  $cmd = $x['1']; }else{ $params = $x['1']; $cmd = $x['0']; }
		if(is_array($x['1'])){ $params = $x['1'];  $cmd = $x['0']; }else{ $params = $x['0']; $cmd = $x['1']; }

		$this->api .= '&command='.$cmd;
		foreach($params as $key => $value) {
           $this->api .= '&'.urlencode($key).'='.urlencode($value);
        }}
	}
	public function run(){
	   if(!empty($this->error)){ return $this->error; } else
	   $ch = curl_init();
       curl_setopt($ch,CURLOPT_URL, $this->api);
       curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
       curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
       curl_setopt($ch, CURLOPT_TIMEOUT, 5);
       return curl_exec($ch);
       curl_close($ch);
	}
}

?>
