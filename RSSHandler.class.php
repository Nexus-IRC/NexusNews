<?php
/* RSSHandler.class.php - NexusNews
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
class RSSHandler {
    function rss_diff ($url, $name, $format) {
		/* TODO: Add feed comparsion functionality */
		$this->rss_start();
		$this->getFeedInfo($url, $name, $format);
		return $this->rss_end();
	}
	function rss_start () { // must be used BEFORE using getFeedInfo
		ob_start();
	}
	
	function rsstotime($rss_time) {
		$day = substr($rss_time, 5, 2);
		$month = substr($rss_time, 8, 3);
		$month = date('m', strtotime("$month 1 2011"));
		$year = substr($rss_time, 12, 4);
		$hour = substr($rss_time, 17, 2);
		$min = substr($rss_time, 20, 2);
		$second = substr($rss_time, 23, 2);
		$timezone = substr($rss_time, 26);

		$timestamp = mktime($hour, $min, $second, $month, $day, $year);

		date_default_timezone_set('UTC');

		if(is_numeric($timezone)) {
			$hours_mod = $mins_mod = 0;
			$modifier = substr($timezone, 0, 1);
			$hours_mod = (int) substr($timezone, 1, 2);
			$mins_mod = (int) substr($timezone, 3, 2);
			$hour_label = $hours_mod>1 ? 'hours' : 'hour';
			$strtotimearg = $modifier.$hours_mod.' '.$hour_label;
			if($mins_mod) {
				$mins_label = $mins_mod>1 ? 'minutes' : 'minute';
				$strtotimearg .= ' '.$mins_mod.' '.$mins_label;
			}
			$timestamp = strtotime($strtotimearg, $timestamp);
		}

		return $timestamp;
	}
	
	function rss_end () {
		$xyz = ob_get_contents(); // get output buffer contents
		ob_end_clean(); // And clean the buffer.
		return $xyz; // Output everything to the function requesting feedinfos.
	}
	function parse_xml($url) { 
		$source = @file_get_contents($url);
		
		if (!$source) { return false; } // Invalid URL
		if (substr($source, 0, 5) != '<?xml') { return false; } // Invalid XML
		
		$xml = new SimpleXMLElement($source);
		
		// Es folgt: Trick 17 um SimpleXML Objekte in ein Array zu parsen
		return json_decode(json_encode($xml),TRUE);
	}
	function getFeedInfo ($url, $name, $format) {
		if (!$name)
			$name = "SomeFeed";
		if (!$format)
			$format = '@@default@@';
			// Default feed format [NAME] TITLE - URL (e.g. [OGame.de] OGame neue version! - http://board.ogame.de/bla/neue_version)
			// I used easyRSS-format-strings here because you easier see what is what.
		if (!$url)
			echo("\0034\002ERROR\002\003: No feed URL given, contact an administrator.");
		$xml = $this->parse_xml($url); // Ask for parsing that XML-file from the server :P
		if (!$xml) // Why ever - reading that XML failed.
			return(true); // Yes, this time its "true" for a fail because nothing=false and nothing is returned on success.
		/* easyRSS format strings should be changed to our kind of format strings: */
			$format = str_replace('@@default@@',		'[@@opts!name@@] @@item!title@@ - @@item!link@@', $format); // default easyRSS-style format string, contents only global-existing RSS feedinfos
			$format = str_replace('@@feed!title@@',		'%5$s',                                           $format);
			$format = str_replace('@@feed!link@@',		'%6$s',                                           $format); // }
			$format = str_replace('@@feed!url@@',		'%6$s',                                           $format); // }
			$format = str_replace('@@opts!name@@',		'%1$s',                                           $format);
			$format = str_replace('@@opts!form@@',		'%7$s',                                           $format);
			$format = str_replace('@@item!id@@',		'%4$s',                                           $format);
			$format = str_replace('@@item!escid@@',		'%4$04d',                                         $format);
			$format = str_replace('@@item!title@@',		'%2$s',                                           $format);
			$format = str_replace('@@item!link@@',		'%3$s',                                           $format); // }
			$format = str_replace('@@item!url@@',		'%3$s',                                           $format); // }
			$format = str_replace('@@item!author@@',	'%8$s',                                           $format);
			$format = str_replace('@@item!time@@',		'%9$s',                                           $format);
		/* Done, all easyRSS format strings are replaed, continue working... */
		if (isset($xml['channel']['item'][0])) { // Multiple items existing
			foreach ($xml['channel']['item'] as $id => $idar) {
				// FORMAT info must be collected:
				$xmf[1] = $name;
				$xmf[2] = @$xml['channel']['item'][$id]['title'];
				if (!isset($xmf[2]))
					$xmf[2] = "SomeTitle";
				$xmf[3] = @$xml['channel']['item'][$id]['link'];
				if (!isset($xmf[3]))
					$xmf[3] = "SomeURL";
				$xmf[8] = @$xml['channel']['item'][$id]['author'];
				if (!isset($xmf[8]))
					$xmf[8] = "SomeAuthor";
				$xmf[4] = $id;
				$xmf[5] = $xml['channel']['title'];
				$xmf[6] = $xml['channel']['link'];
				$xmf[9] = '~'.$this->rsstotime($xml['channel']['item'][$id]['pubDate']);
				$xmf[7] = $format;
				ksort($xmf); // Because my way of sorting fails xD (Not 1-8 its 1-3,8,4-7 :X
				// Now all format info is collected and we will return our RSS-result:
				echo(vsprintf($format."\n",$xmf));
			}
		} else { // Only one item existing
			$xmf[1] = $name;
			$xmf[2] = @$xml['channel']['item']['title'];
			if (!isset($xmf[2]))
				$xmf[2] = "SomeTitle";
			$xmf[3] = @$xml['channel']['item']['link'];
			if (!isset($xmf[3]))
				$xmf[3] = "SomeURL";
			$xmf[8] = @$xml['channel']['item']['author'];
			if (!isset($xmf[8]))
				$xmf[8] = "SomeAuthor";
			$xmf[4] = 0;
			$xmf[5] = $xml['channel']['title'];
			$xmf[6] = $xml['channel']['link'];
			$xmf[7] = $format;
			ksort($xmf); // Because my way of sorting fails xD (Not 1-8 its 1-3,8,4-7 :X
			// Now all format info is collected and we will return our RSS-result:
			echo(vsprintf($format."\n",$xmf));
		}
	}
}
?>