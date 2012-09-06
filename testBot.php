<?php
/* testBot.php - InfoBot
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

# Connection data:
 $host = "znc1.nexus-irc.de";
 $port = 2637;
 $pass = "xxxx:xxxx";
 $botnick = "InfoBot";
 $botident = "InfoBot";
 $botreal = "InfoBot Pre-Alpha 2.0 (IBnG)";
 
# Dependencies
require_once("RSSHandler.class.php");
require_once("BotHandler.class.php");
require_once("clientSocket.class.php");
require_once("phpTextWrite.class.php");

# Feed list, also a dependency
require_once("feeds.php");

$clients = new clientSocket;
$rss = new RSSHandler;

# Bot

$sockID = $clients->newID();
$clients->makeSocket($sockID,$host,$port);
$clients->putSocket($sockID,"PASS :$pass");
$clients->putSocket($sockID,"NICK :$botnick");
$clients->putSocket($sockID,"USER $botident 0 * :$botreal");

while (true) { // Main LOOP
	usleep(10000); // 10ms loop, reduces CPU usage.
	while($gets = $clients->readSocket($sockID)) {
		echo("<< ".$gets."\n"); flush();
		$exp = explode(" ",$gets);
		if (isset($exp[0])) {
			if ($exp[0] == "PING") {
				$clients->putSocket($sockID,"PONG ".$exp[1]);
			}
			eval(file_get_contents("testBotCode.php"));
		}
	}
}

function getNick ($string) {
	$x = explode("!",substr($string,1)); return($x[0]);
}

?>
