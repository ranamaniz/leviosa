<?php
	//$_SERVER SUPERGLOBAL
	//create server array
	
	$server = [
		'Host Server Name' =>$_SERVER['SERVER_NAME'],
		'Host Header'=>$_SERVER['HTTP_HOST'],
		'Server Software' =>$_SERVER['SERVER_SOFTWARE'],
		'Document root' => $_SERVER['DOCUMENT_ROOT'],
		'Script Name' => $_SERVER['SCRIPT_NAME'],
		'Script Filename'=> $_SERVER['SCRIPT_FILENAME']
	];

	// echo $server['Server Software'];
	// print_r($server);

	//create client array
	$client = [
		'Client System Info'=>$_SERVER['HTTP_USER_AGENT'],
		'Client IP'=>$_SERVER['REMOTE_ADDR'],
		'Remote Port'=>$_SERVER['REMOTE_PORT']
	];

	// print_r($client);

?>