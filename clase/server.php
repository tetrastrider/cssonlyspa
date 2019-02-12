<?php
$conect=mysqli_connect("127.0.0.1","root","","tienda");
$host = 'localhost'; //host
$port = '8081'; //port
$null = NULL; //null var
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);//Create TCP/IP sream socket
socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);//reuseable port
socket_bind($socket, 0, $port);//bind socket to specified host
socket_listen($socket);//listen to port
$clients = array($socket);//create & add listning socket to the list
//start endless loop, so that our script doesn't stop
while (true) {
	
	$changed = $clients;//manage multipal connections
	socket_select($changed, $null, $null, 0, 10);//returns the socket resources in $changed array
	$todos=(sizeof($clients)-1);
	//check for new socket si esta en el array changed el socket
	if (in_array($socket, $changed)) {
		$socket_new = socket_accept($socket); //aceptar nuevo socket
		$clients[] = $socket_new; //add socket to client array
		$header = socket_read($socket_new, 1024); //read data sent by the socket
		apreton($header, $socket_new, $host, $port); //perform websocket handshake
		socket_getpeername($socket_new, $ip,$puerto); //get ip address of connected socket
		$query = mysqli_query($conect,"SELECT * FROM chat ORDER BY id ASC");
		while($data=mysqli_fetch_assoc($query)){
		$user_name = $data["user_name"];
		$user_message = $data["user_message"];
		$user_color = $data["user_color"];
		$publicado = $data["publicado"];
		$response = mask(json_encode(array('type'=>'usermsg', 'name'=>$user_name, 'message'=>$user_message, 'color'=>$user_color,'clientes'=>$todos,'publicado'=>$publicado))); //prepare json data
		enviar($response); //notify all users about new connection
		}
		//make room for new socket
		$found_socket = array_search($socket, $changed);
		unset($changed[$found_socket]);
	}
	//loop through all connected sockets
	foreach ($changed as $changed_socket) {		
		//check for any incomming data
		while(@socket_recv($changed_socket, $buf, 1024, 0) >= 1)
		{
			$received_text = unmask($buf); //unmask data
			$tst_msg = json_decode($received_text); //json decode 
			$user_name = $tst_msg->name; //sender name
			$user_message = $tst_msg->message; //message text
			$user_color = $tst_msg->color; //color
			$publicado = $tst_msg->publicado;
			if($user_name!=""){
			$query = mysqli_query($conect,"INSERT INTO chat (user_name,user_message,user_color,publicado) VALUES ('$user_name','$user_message','$user_color','$publicado')");
			}
			//prepare data to be sent to client
			$response_text = mask(json_encode(array('type'=>'usermsg', 'name'=>$user_name, 'message'=>$user_message, 'color'=>$user_color,'clientes'=>$todos,'publicado'=>$publicado)));
			enviar($response_text); //send data
			break 2; //exist this loop
		}
		
		$buf = @socket_read($changed_socket, 1024, PHP_NORMAL_READ);
		if ($buf === false) { // check disconnected client
			// remove client for $clients array
			$found_socket = array_search($changed_socket, $clients);
			socket_getpeername($changed_socket, $ip);
			unset($clients[$found_socket]);
			
			//notify all users about disconnected connection
			$response = mask(json_encode(array('type'=>'system', 'message'=>$ip.' desconectado')));
			enviar($response);
		}
	}
}
// close the listening socket
socket_close($sock);

function enviar($msg)
{
	global $clients;
	foreach($clients as $changed_socket)
	{
		@socket_write($changed_socket,$msg,strlen($msg));
	}
	return true;
}

//Unmask incoming framed message
function unmask($text) {
	$length = ord($text[1]) & 127;
	if($length == 126) {
		$masks = substr($text, 4, 4);
		$data = substr($text, 8);
	}
	elseif($length == 127) {
		$masks = substr($text, 10, 4);
		$data = substr($text, 14);
	}
	else {
		$masks = substr($text, 2, 4);
		$data = substr($text, 6);
	}
	$text = "";
	for ($i = 0; $i < strlen($data); ++$i) {
		$text .= $data[$i] ^ $masks[$i%4];
	}
	return $text;
}

//Encode message for transfer to client.
function mask($text)
{
	$b1 = 0x80 | (0x1 & 0x0f);
	$length = strlen($text);
	
	if($length <= 125)
		$header = pack('CC', $b1, $length);
	elseif($length > 125 && $length < 65536)
		$header = pack('CCn', $b1, 126, $length);
	elseif($length >= 65536)
		$header = pack('CCNN', $b1, 127, $length);
	return $header.$text;
}

//handshake new client.
function apreton($receved_header,$client_conn, $host, $port)
{
	$headers = array();
	$lines = preg_split("/\r\n/", $receved_header);
	foreach($lines as $line)
	{
		$line = chop($line);
		if(preg_match('/\A(\S+): (.*)\z/', $line, $matches))
		{
			$headers[$matches[1]] = $matches[2];
		}
	}

	$secKey = $headers['Sec-WebSocket-Key'];
	$secAccept = base64_encode(pack('H*', sha1($secKey . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11')));
	//hand shaking header
	$upgrade  = "HTTP/1.1 101 Web Socket Protocol Handshake\r\n" .
	"Upgrade: websocket\r\n" .
	"Connection: Upgrade\r\n" .
	"WebSocket-Origin: $host\r\n" .
	"WebSocket-Location: ws://$host:$port/dos/clase/server.php\r\n".
	"Sec-WebSocket-Accept:$secAccept\r\n\r\n";
	socket_write($client_conn,$upgrade,strlen($upgrade));
}
