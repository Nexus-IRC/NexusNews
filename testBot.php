<?php
/* testBot.php - NexusNews
 * Copyright (C) 2012-2013  #Nexus project
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
$botnick = "NexusNews";
$botident = "NexusNews";
$botreal = "NexusNews Beta 2.0 (IBnG)";

$dltimer = array();
$timer = time();
$stime = time();
# Dependencies
require_once("RSSHandler.class.php");
require_once("BotHandler.class.php");
require_once("clientSocket.class.php");

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
    if (time() >= $timer + 1) {
        $timer = time();
        foreach ($dltimer as $thetime => $evntarray) {
            if ($thetime <= time()) {
                timer_evnts($thetime,1);
            }
        }
    }
	usleep(10000); // 10ms loop, reduces CPU usage.
	while($gets = $clients->readSocket($sockID)) {
		echo("<< ".$gets."\n"); flush();
		$exp = explode(" ",$gets);
		if (isset($exp[0])) {
			if ($exp[0] == "PING") {
				$clients->putSocket($sockID,"PONG ".$exp[1]);
			}
			include("testBotCode.php");
		}
	}
}

function create_timer ($time, $line) {
	global $dltimer;
	$ttime = time() + str2time($time);
	$dlc = count($dltimer[$ttime]) + 1;
	$dltimer[$ttime][$dlc] = $line;
}

function timer_evnts ($time, $call) {
	global $dltimer;
	foreach ($dltimer["$time"] as $timenum => $timeevnt) {
		$timtime = explode(" ",$timeevnt);
		if ($timtime[0] == "news") {
			news();
		}
		unset($dltimer["$time"][$timenum]);
	}
}

function news () {
	global $rss, $feeds, $clients, $sockID;
	$rss->rss_start();
	$stat = $rss->getFeedInfo($feeds["ogame.de"]['url'], "ogame.de", $feeds["ogame.de"]['output']);
	$res = explode("\n",$rss->rss_end());
	$test = explode("~",$res[0]);
	if(date("d.m.Y",$test[1]) == date("d.m.Y",time())){
		$clients->putSocket($sockID,"PRIVMSG #nexus-test :".$test[0]);
		create_timer("6h","news");
	}
	else{
		create_timer("1h","news");
	}
}

function str2time ($line) {
    $ttime = 0;
    $x = 0;
    $cache = "";
    while ($line[$x] != "") {
        if ($line[$x] == "1" or $line[$x] == "2" or $line[$x] == "3" or $line[$x] == "4" or $line[$x] == "5" or $line[$x] == "6" or $line[$x] == "7" or $line[$x] == "8" or $line[$x] == "9" or $line[$x] == "0") {
            $cache = $cache.$line[$x];
            $y = $x + 1;
            if ($line[$y] == "") {
                $ttime = $ttime + $cache;
                $cache = "";
            }
        }
        elseif ($line[$x] == "y") {
            $ttime = $ttime + $cache * 60 * 60 * 24 * 30 * 12;
            $cache = "";
        }
        elseif ($line[$x] == "M") {
            $ttime = $ttime + $cache * 60 * 60 * 24 * 30;
            $cache = "";
        }
        elseif ($line[$x] == "w") {
            $ttime = $ttime + $cache * 60 * 60 * 24 * 7;
            $cache = "";
        }
        elseif ($line[$x] == "d") {
            $ttime = $ttime + $cache * 60 * 60 * 24;
            $cache = "";
        }
        elseif ($line[$x] == "h") {
            $ttime = $ttime + $cache * 60 * 60;
            $cache = "";
        }
        elseif ($line[$x] == "m") {
            $ttime = $ttime + $cache * 60;
            $cache = "";
        }
        elseif ($line[$x] == "s") {
            $ttime = $ttime + $cache;;
            $cache = "";
        }
        else {
            return("I");
        }
        $x++;
    }
    return($ttime);
}

function time2str ($line) {
	$str = "";
	$years = 0;
	$months = 0;
	$wks = 0;
	$days = 0;
	$hrs = 0;
	$mins = 0;
	$secs = 0;
	$secs = $line;
	while ($secs >= 60 * 60 * 24 * 30 * 12) {
		$years++;
		$secs = $secs - 60 * 60 * 24 * 30 * 12;
	}
	while ($secs >= 60 * 60 * 24 * 30) {
		$months++;
		$secs = $secs - 60 * 60 * 24 * 30;
	}
	while ($secs >= 60 * 60 * 24 * 7) {
		$wks++;
		$secs = $secs - 60 * 60 * 24 * 7;
	}
	while ($secs >= 60 * 60 * 24) {
		$days++;
		$secs = $secs - 60 * 60 * 24;
	}
	while ($secs >= 60 * 60) {
		$hrs++;
		$secs = $secs - 60 * 60;
	}
	while ($secs >= 60) {
		$mins++;
		$secs = $secs - 60;
	}
	if ($years > 0) {
		$str = $str.$years." years ";
	}
	if ($months > 0) {
		$str = $str.$months." months ";
	}
	if ($wks > 0) {
		$str = $str.$wks." weeks ";
	}
	if ($days > 0) {
		$str = $str.$days." days ";
	}
	if ($hrs > 0) {
		$str = $str.$hrs." hours ";
	}
	if ($mins > 0) {
		$str = $str.$mins." minutes ";
	}
	if ($secs > 0 or $str == "") {
		$str = $str.$secs." seconds";
	}
	if (substr($str,strlen($str) - 1) == " ") {
		$str = substr($str,0,strlen($str) - 1);
	}
	return($str);
}

function getNick ($string) {
	$x = explode("!",substr($string,1)); return($x[0]);
}

?>