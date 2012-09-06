<?php
/* phpTextWrite.class.php - InfoBot
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
######  #####  #####  #  #   #  #####         ####   #####  #   #  #####  #
#       #   #  #      #  ##  #  #   #         #   #  #   #  #   #  #   #  #
#       #####  #####  #  # # #  #   #  #####  ####   #   #  #####  #####  #
#       #   #      #  #  #  ##  #   #         #  #   #   #    #    #   #  #
######  #   #  #####  #  #   #  #####         #  #   #####    #    #   #  #####

// Like this text, IRC input will be converted to big letters made from ASCII chars.
// Example *write casino-royal

/*

TODO:
	1.	Add UTF-8 Support
	2.	Add more letters (KLMNOPQRSTUVWXYZ)
	3.	Add more special chars ($ maybe... and.... other chars...)

*/
class phpText {
	public $ar1 = array (
		" " => "  ",
		"=" => "   ",
		"," => "  ",
		"#" => " # # ",
		"-" => "     ",
		"!" => "#",
		"A" => "#####",
		"B" => "#### ",
		"C" => "#####",
		"D" => "#### ",
		"E" => "#####",
		"F" => "#####",
		"G" => "#####",
		"H" => "#   #",
		"I" => "#",
		"J" => "  #",
		"K" => "#   #",
		"L" => "#    ",
		"M" => "#####",
		"N" => "##  #",
		"O" => "#####",
		"P" => "#####",
		"Q" => "#####",
		"R" => "#####",
		"S" => "#####",
		"T" => "#####",
		"U" => "#   #",
		"V" => "#   #",
		"W" => "#   #",
		"X" => "#   #",
		"Y" => "#   #",
		"Z" => "#####",
		);
	public $ar2 = array (
		" " => "  ",
		"=" => "###",
		"," => "  ",
		"#" => "#####",
		"-" => "     ",
		"!" => "#",
		"A" => "#   #",
		"B" => "#   #",
		"C" => "#    ",
		"D" => "#   #",
		"E" => "#    ",
		"F" => "#    ",
		"G" => "#    ",
		"H" => "#   #",
		"I" => "#",
		"J" => "  #",
		"K" => "#  # ",
		"L" => "#    ",
		"M" => "# # #",
		"N" => "# # #",
		"O" => "#   #",
		"P" => "#   #",
		"Q" => "#   #",
		"R" => "#   #",
		"S" => "#    ",
		"T" => "  #  ",
		"U" => "#   #",
		"V" => "#   #",
		"W" => "# # #",
		"X" => " # # ",
		"Y" => " # # ",
		"Z" => "   # ",
	);
	public $ar3 = array (
		" " => "  ",
		"=" => "   ",
		"," => "  ",
		"#" => " # # ",
		"-" => "#####",
		"!" => "#",
		"A" => "#####",
		"B" => "#####",
		"C" => "#    ",
		"D" => "#   #",
		"E" => "#####",
		"F" => "#####",
		"G" => "# ###",
		"H" => "#####",
		"I" => "#",
		"J" => "  #",
		"K" => "###  ",
		"L" => "#    ",
		"M" => "# # #",
		"N" => "#  ##",
		"O" => "#   #",
		"P" => "#####",
		"Q" => "# # #",
		"R" => "#####",
		"S" => "#####",
		"T" => "  #  ",
		"U" => "#   #",
		"V" => "#   #",
		"W" => "# # #",
		"X" => "  #  ",
		"Y" => "  #  ",
		"Z" => "  #  ",
	);
	public $ar4 = array (
		" " => "  ",
		"=" => "###",
		"," => " #",
		"#" => "#####",
		"-" => "     ",
		"!" => " ",
		"A" => "#   #",
		"B" => "#   #",
		"C" => "#    ",
		"D" => "#   #",
		"E" => "#    ",
		"F" => "#    ",
		"G" => "#   #",
		"H" => "#   #",
		"I" => "#",
		"J" => "  #",
		"K" => "#  # ",
		"L" => "#    ",
		"M" => "# # #",
		"N" => "#   #",
		"O" => "#   #",
		"P" => "#    ",
		"Q" => "#  # ",
		"R" => "#  # ",
		"S" => "    #",
		"T" => "  #  ",
		"U" => "#   #",
		"V" => " # # ",
		"W" => "# # #",
		"X" => " # # ",
		"Y" => "  #  ",
		"Z" => " #   ",
	);
	public $ar5 = array (
		" " => "  ",
		"=" => "   ",
		"," => "# ",
		"#" => " # # ",
		"-" => "     ",
		"!" => "#",
		"A" => "#   #",
		"B" => "#### ",
		"C" => "#####",
		"D" => "#### ",
		"E" => "#####",
		"F" => "#    ",
		"G" => "#####",
		"H" => "#   #",
		"I" => "#",
		"J" => "## ",
		"K" => "#   #",
		"L" => "#####",
		"M" => "#   #",
		"N" => "#   #",
		"O" => "#####",
		"P" => "#    ",
		"Q" => "### #",
		"R" => "#   #",
		"S" => "#####",
		"T" => "  #  ",
		"U" => "#####",
		"V" => "  #  ",
		"W" => "#####",
		"X" => "#   #",
		"Y" => "  #  ",
		"Z" => "#####",
	);
	function __construct () {
		// here i will add numbers and other additional chars...
			// {heart}
		$this->ar1["*"] = " # # # ";
		$this->ar2["*"] = "  ###  ";
		$this->ar3["*"] = "#######";
		$this->ar4["*"] = "  ###  ";
		$this->ar5["*"] = " # # # ";
			// {heart}
		$this->ar1[chr(5)] = " ## ## ";
		$this->ar2[chr(5)] = "#  #  #";
		$this->ar3[chr(5)] = " #   # ";
		$this->ar4[chr(5)] = "  # #  ";
		$this->ar5[chr(5)] = "   #   ";
			// Ä
		$this->ar1["Ä"] = " # # ";
		$this->ar2["Ä"] = "#####";
		$this->ar3["Ä"] = "#   #";
		$this->ar4["Ä"] = "#####";
		$this->ar5["Ä"] = "#   #";
			// Ö
		$this->ar1["Ö"] = " # # ";
		$this->ar2["Ö"] = "#####";
		$this->ar3["Ö"] = "#   #";
		$this->ar4["Ö"] = "#   #";
		$this->ar5["Ö"] = "#####";
			// Ü
		$this->ar1["Ü"] = " # # ";
		$this->ar2["Ü"] = "#   #";
		$this->ar3["Ü"] = "#   #";
		$this->ar4["Ü"] = "#   #";
		$this->ar5["Ü"] = "#####";
			// /
		$this->ar1["/"] = "    #";
		$this->ar2["/"] = "   # ";
		$this->ar3["/"] = "  #  ";
		$this->ar4["/"] = " #   ";
		$this->ar5["/"] = "#    ";
			// :
		$this->ar1[":"] = " ";
		$this->ar2[":"] = "#";
		$this->ar3[":"] = " ";
		$this->ar4[":"] = "#";
		$this->ar5[":"] = " ";
			// ?
		$this->ar1["?"] = "#####";
		$this->ar2["?"] = "  ###";
		$this->ar3["?"] = "  #  ";
		$this->ar4["?"] = "     ";
		$this->ar5["?"] = "  #  ";
			// .
		$this->ar1["."] = " ";
		$this->ar2["."] = " ";
		$this->ar3["."] = " ";
		$this->ar4["."] = " ";
		$this->ar5["."] = "#";
			// 0
		$this->ar1["0"] = "#####";
		$this->ar2["0"] = "#  ##";
		$this->ar3["0"] = "# # #";
		$this->ar4["0"] = "##  #";
		$this->ar5["0"] = "#####";
			// 1
		$this->ar1["1"] = "  #";
		$this->ar2["1"] = " ##";
		$this->ar3["1"] = "# #";
		$this->ar4["1"] = "  #";
		$this->ar5["1"] = "  #";
			// 2
		$this->ar1["2"] = "#####";
		$this->ar2["2"] = "    #";
		$this->ar3["2"] = "#####";
		$this->ar4["2"] = "#    ";
		$this->ar5["2"] = "#####";
			// 3
		$this->ar1["3"] = "#####";
		$this->ar2["3"] = "    #";
		$this->ar3["3"] = "#####";
		$this->ar4["3"] = "    #";
		$this->ar5["3"] = "#####";
			// 4
		$this->ar1["4"] = "#  # ";
		$this->ar2["4"] = "#  # ";
		$this->ar3["4"] = "#####";
		$this->ar4["4"] = "  #  ";
		$this->ar5["4"] = "  #  ";
			// 5
		$this->ar1["5"] = " ####";
		$this->ar2["5"] = "#    ";
		$this->ar3["5"] = "#####";
		$this->ar4["5"] = "    #";
		$this->ar5["5"] = "#####";
			// 6
		$this->ar1["6"] = "#####";
		$this->ar2["6"] = "#    ";
		$this->ar3["6"] = "#####";
		$this->ar4["6"] = "#   #";
		$this->ar5["6"] = "#####";
			// 7
		$this->ar1["7"] = "#####";
		$this->ar2["7"] = "   # ";
		$this->ar3["7"] = "  #  ";
		$this->ar4["7"] = " #   ";
		$this->ar5["7"] = "#    ";
			// 8
		$this->ar1["8"] = "#####";
		$this->ar2["8"] = "#   #";
		$this->ar3["8"] = "#####";
		$this->ar4["8"] = "#   #";
		$this->ar5["8"] = "#####";
			// 9
		$this->ar1["9"] = "#####";
		$this->ar2["9"] = "#   #";
		$this->ar3["9"] = "#####";
		$this->ar4["9"] = "    #";
		$this->ar5["9"] = "#####";
		// --- end ---
		$xchar = (func_get_arg(0) != "") ? func_get_arg(0) : "#"; // The char to use for "big letters"
		$this->ar1 = str_replace("#",$xchar,$this->ar1);
		$this->ar2 = str_replace("#",$xchar,$this->ar2);
		$this->ar3 = str_replace("#",$xchar,$this->ar3);
		$this->ar4 = str_replace("#",$xchar,$this->ar4);
		$this->ar5 = str_replace("#",$xchar,$this->ar5);
	}
	function convert ($input) {
		$input = strtoupper(utf8_decode($input));
		$i = 0; $y = 0;
		while (@$input[$i] != "") {
			$line1 = $this->conv1($input[$i]);
			$line2 = $this->conv2($input[$i]);
			$line3 = $this->conv3($input[$i]);
			$line4 = $this->conv4($input[$i]);
			$line5 = $this->conv5($input[$i]);
			if (@$text[1] != "") {
				@$text[1] .= "  ".$line1;
			}
			else {
				@$text[1] .= $line1;
			}
			if (@$text[2] != "") {
				@$text[2] .= "  ".$line2;
			}
			else {
				@$text[2] .= $line2;
			}
			if (@$text[3] != "") {
				@$text[3] .= "  ".$line3;
			}
			else {
				@$text[3] .= $line3;
			}
			if (@$text[4] != "") {
				@$text[4] .= "  ".$line4;
			}
			else {
				@$text[4] .= $line4;
			}
			if (@$text[5] != "") {
				@$text[5] .= "  ".$line5;
			}
			else {
				@$text[5] .= $line5;
			}
			$i++; $y++;
		}
		foreach ($text as $tnum => $cont) {
		 @$nido .= $cont."\n";
		}
		return($nido);
	}
	function conv1 ($char) {
		return (isset($this->ar1[$char]) ? $this->ar1[$char] : "     ");
	}
	function conv2 ($char) {
		return (isset($this->ar2[$char]) ? $this->ar2[$char] : "     ");
	}	
	function conv3 ($char) {
		return (isset($this->ar3[$char]) ? $this->ar3[$char] : "  $char  ");
	}	
	function conv4 ($char) {
		return (isset($this->ar4[$char]) ? $this->ar4[$char] : "     ");
	}	
	function conv5 ($char) {
		return (isset($this->ar5[$char]) ? $this->ar5[$char] : "     ");
	}	
}

?>