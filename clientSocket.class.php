<?php
/* clientSocket.class.php - NexusNews
 * Copyright (C) 2012  #Nexus project
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License 
 * along with this program. If not, see <http://www.gnu.org/licenses/>. 
 */

class clientSocket {
	
	function newID () { // randomly assign a new ID for new client sockets
		global $clientSocket;
		$newID = rand(1000,9000);
		return (isset($clientsocket[$newID])) ? $this->newID() : $newID;
	}

	function makeSocket ($id,$host,$port) { // create a socket
		global $clientSocket;
		if (!$clientSocket[$id]) {
		    echo("\n\nStarting new socket ID#$id\n\n");
			flush();
			$clientSocket[$id] = fsockopen($host,$port);
			stream_set_blocking($clientSocket[$id],0); # DON'T FORGET TO MAKE UNBLOCKED CONNECTIONS
			return true;
		}
		
		return false;
	}
 
	function readSocket ($id) { // get a single, "\n"-appended line from an EXISTING socket and remove \r\n
		global $clientSocket;
		return str_replace("\r","",str_replace("\n","",fgets($clientSocket[$id])));
	}
 
	function writeSocket ($id,$line) { // write a non-"\n"-appended line to an EXISTING socket
		global $clientSocket;
		fwrite($clientSocket[$id],$line); // BE CAREFUL - THIS ISNT "\n"-APPENDED!!!
	}
	
	function putSocket ($id,$line) { // write a "\n"-appended line to an EXISTING socket
		global $clientSocket;
		fwrite($clientSocket[$id],$line."\n");
		echo(">> ".$line."\n");
	}

	function eofSocket ($id) { // checks, whether a socket has been closed by server-side
		global $clientSocket;
		return(feof($clientSocket[$id])) ? true : false;
		// be careful, if the socket wasnt closed by server side this might hang up your php instance.
	}

	function isSocket ($id) {
		global $clientSocket;
		return (isset($clientsocket[$x])) ? true : false;
	}

	function endSocket ($id) {
		global $clientSocket;
		fclose($clientSocket[$id]);
		unset($clientSocket[$id]); // "double-terminates" a client socket.
	}
	
	function bindSocket ($id,$vhost) { // bind a socket to a vhost
		// HALT: stream sockets don't like vhosts - always return FALSE
		return(false);
		# This function will work later if socket_create and its subfunctions are used.
	}
}
?>