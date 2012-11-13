<?php
$trigger = "!";
$rsstrig = "!";
if ($exp[1] == "001") {
	$clients->putSocket($sockID,"JOIN #Calisto,#InfoBot");
	create_timer("1m","news");
}
if ($exp[1] == "PRIVMSG" && $exp[3][1] == "\001") {
 $nick = getNick($exp[0]);
 if ($exp[3] == ":\001VERSION\001") {
  $clients->putSocket($sockID,"NOTICE $nick :\001VERSION InfoBot Pre-Alpha 2.0 (IBnG) PHP ".phpversion()."\001");
 }
}
if ($exp[1] == "PRIVMSG" && $exp[2][0] == "#") {
	$msgt = "NOTICE";
	if ($exp[3][1] == "*") {
		$msgt = "PRIVMSG";
		$exp[3] = ":".substr($exp[3],2);
	}
	$nick = getNick($exp[0]);
	if (@substr($exp[3],0,strlen(":".$rsstrig)) == ":$rsstrig") {
		$xfeed = substr($exp[3],strlen(":".$rsstrig));

	 	if (isset($feeds[@$xfeed])) {
			$rss->rss_start();
			$stat = $rss->getFeedInfo($feeds[$xfeed]['url'], null, $feeds[$xfeed]['output']);
			$res = explode("\n",$rss->rss_end());
			if ($feeds[$xfeed]['format'] == "RSS2") {
				$clients->putSocket($sockID,"$msgt $nick :\0034FEED ERROR:\003 Special RSS feeds aren't supported right now.");
			} else {
				if ($stat == true) {
					$clients->putSocket($sockID,"$msgt $nick :\0034FEED ERROR:\003 Couldn't fetch information from '".$feeds[$xfeed]['url']."'.");
				} else {
					foreach ($res as $ln => $lc) {
						$nick = getNick($exp[0]);
						$test1 = explode("~",$lc);
						$clients->putSocket($sockID,"$msgt $nick :".$test1[0]);
					}
				}
			}
		}
	}
	if ($exp[3] == ":".$trigger."write") {
		$phpText = new phpText(chr(22)." ".chr(22));
		$cstr = str_replace("{heart}",chr(5),substr($gets,strlen("$exp[0] $exp[1] $exp[2] $exp[3] ")));
		$xy = explode("\n",$phpText->convert($cstr));
		foreach ($xy as $line) {
			$clients->putSocket($sockID,"PRIVMSG $exp[2] :$line");
		}
	}
	if ($exp[3] == ":".$trigger."rss") {
		if (isset($feeds[@$exp[4]])) {
			$rss->rss_start();
			$stat = $rss->getFeedInfo($feeds[$exp[4]]['url'], null, $feeds[$exp[4]]['output']);
			$res = explode("\n",$rss->rss_end());
			if ($feeds[$exp[4]]['format'] == "RSS2") {
				$clients->putSocket($sockID,"$msgt $nick :\0034FEED ERROR:\003 Special RSS feeds aren't supported right now.");
			} else {
				if ($stat == true) {
					$clients->putSocket($sockID,"$msgt $nick :\0034FEED ERROR:\003 Couldn't fetch information from '".$feeds[$exp[4]]['url']."'.");
				} else {
					foreach ($res as $ln => $lc) {
						$nick = getNick($exp[0]);
						$clients->putSocket($sockID,"$msgt $nick :".$lc);
					}
				}
			}
		} else {
			if (@$exp[4] != NULL) {
				$clients->putSocket($sockID,"$msgt $nick :I don't know this feed.");
				$clients->putSocket($sockID,"$msgt $nick :How to list feeds: Use !news");
			} else {
				$clients->putSocket($sockID,"$msgt $nick :\002All available feeds\002");
				$xy = 0;
				foreach ($feeds as $feedname => $feedopts) {
					$xy++;
					if ($feedopts['url']) {
						$clients->putSocket($sockID,"$msgt $nick :$feedname");
					} else {
						$clients->putSocket($sockID,"$msgt $nick :\002$feedname\002 (no feed url added yet)");
					}
				}
				$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
			}
		}
	}
	if (@$exp[3] == ":".$trigger."news") {
		$nick = getNick($exp[0]);
		$clients->putSocket($sockID,"$msgt $nick :\002Available Languages\002");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.com     Common");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.org     Organisation");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.de      German");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.uk      British");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.ir      Iranian");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.pl      Polish");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.ru      Russian");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.es      Spanish");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.fr      French");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news.us      United States Feeds");
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- (10 results)");
	}
	if (@$exp[3] == ":".$trigger."news.de") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available german feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.de',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.uk") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available british feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.uk',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.com") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available common feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.com',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.org") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available organisation feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.org',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.it") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available italian feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.it',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.ir") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available iranian/persian feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.ir',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.pl") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available polish feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.pl',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.ru") {	
		$clients->putSocket($sockID,"$msgt $nick :\002Available russian feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.ru',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.es") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available spanish feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.es',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.fr") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available french feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.fr',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."news.us") {
		$clients->putSocket($sockID,"$msgt $nick :\002Available american feeds\002");
		$xy = 0;
		foreach ($feeds as $feedname => $feedopts) {
			if (fnmatch('*.us',$feedname)) {
				$clients->putSocket($sockID,"$msgt $nick :$feedname");
				$xy++;
			}
		}
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing -- ($xy results)");
	}
	if (@$exp[3] == ":".$trigger."feeds") {
		$clients->putSocket($sockID,"$msgt $nick :There are \002".count($feeds)."\002 feeds in my database.");
	}
	if (@$exp[3] == ":".$trigger."infobot") {
		$clients->putSocket($sockID,"$msgt $nick :\002InfoBot Pre-Alpha 2.0 (IBnG) PHP".phpversion());
		$clients->putSocket($sockID,"$msgt $nick :Copyright © 2012 The irc-news.de project");
		$clients->putSocket($sockID,"$msgt $nick :Hostet by #Nexus");
		$clients->putSocket($sockID,"$msgt $nick : ");
		$clients->putSocket($sockID,"$msgt $nick :All commands:");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."rss <nothing|feed-alias>       Shows you all available feeds or the content of any specific");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."news                           Shows you a list of all feed categories");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."feeds                          Shows you, how many feeds the bot knows");
		$clients->putSocket($sockID,"$msgt $nick :".$trigger."infobot                        Shows this version info and help.");
		$clients->putSocket($sockID,"$msgt $nick :".chr(31)."Little information: Putting a * in front of ".$trigger."<command> will force the bot to reply with a query.".chr(31));
		$clients->putSocket($sockID,"$msgt $nick :-- End of listing --");
	}
}

if (@$exp[001] == "INVITE") {
	$clients->putSocket($sockID,"JOIN ".$exp[3]);
	$clients->putSocket($sockID,"NOTICE $nick :Thanks for inviting me to ".$exp[3]."!");
}
?>