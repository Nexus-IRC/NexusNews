<?php
/* BotHandler.Class.php - InfoBot
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
class botHandler {
	function listBots () {
		global $bots;
		if (isset($bots) && is_array($bots))
			return $bots;
	}
	function newID () {
		global $bots;
		$newID = rand(1000,9000); # same as for clientSocket - we need to create a random ID.
		return (isset($bots[$id])) ? $this->newID() : $newID;
	}
	function addBot ($id, $options) {
		global $bots;
		if (isset($bots[$id])) {
			return false; # we cannot use the same ID twice.
		} else {
			$bots[$id] = $options; # Add the bot with all given options.
		}
	}
	function delBot ($id) {
		global $bots;
		if (isset($bots[$id])) {
			$sockID = $this->getBotSocketID($bot);
			if ($sockID) {
				$this->clientSocket->putSocket($sockID,"QUIT :[$codename] Disconnect requested.");
				usleep(1000);
				# usleep must be - otherwise sometimes the socket closes faster then we sent
				# the quit message.
				$this->clientSocket->endSocket($sockID);
			}
			unset($bots[$id]);
		} else {
			return false;
		}
	}
	function setBot ($id, $option, $value) {
		global $bots;
		if (isset($bots[$id])) {
			$bots[$id][$option] = $value;
			if ($option == "active" && $value == 1) { # If the bot should be activated.
				$newID = $this->clientSocket->newID(); # get a new socket id
				$bots[$id]['sockID'] = $newID; # self-explaining ^^
				$this->clientSocket->makeSocket($newID,$bots[$id]['host'],$bots[$id]['port']);
				if (isset($bots[$id]['serverpass']))
					$this->clientSocket->putSocket($newID,"PASS :".$bots[$id]['serverpass']);
				$this->clientSocket->putSocket($newID,"NICK :".$bots[$id]['nick']);
				$this->clientSocket->putSocket($newID,"USER ".$bots[$id]['ident']." 0 * :".$bots[$id]['realname']);
				# connect the bot.
			}
			return true;
		} else {
			return false;
		}
	}
	function getBot ($id, $option) {
		global $bots;
		if (isset($bots[$id])) {
			return (isset($bots[$id][$option])) ? $bots[$id][$option] : false;
		} else {
			return false;
		}
	}
	function getBotSocketID ($id) {
		global $bots;
		if (isset($bots[$id])) {
		 return (isset($bots[$id]['sockID'])) ? $bots[$id]['sockID'] : 0;
		} else {
		 return false;
		}
	}
}

							## INFO: ##
################################################################################
# Reading the bot sockets and controlling the bots isn't up to the bot handler #
# The bot handler is more or less just an informative control script to add    #
# your personal bots.                                                          #
################################################################################

?>