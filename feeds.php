<?php
/* feeds.php - NexusNews
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
 /* Current Gameforge games:
 4story,aion,airrivals,battleknight,bitefight,elsword,gladiatus,ikariam,kingsage,metin2,nostale,tanoth,wildguns,wizard101
 Feed languages so far:
 br,de,es,fr,ir,pl,ru,uk,us
 */
$feeds['nostale.de'] = array(
				"url"      =>             "http://board.nostale.de/index.php?page=ThreadsFeed&format=rss2&boardID=1",
				"channels" =>             "#nexus-test",
				"database" =>             "NexusNews/scripts/db/nostale.db",
				"output"   =>             "[NosTale.de] @@item!title@@ - @@item!link@@",
);
$feeds['nostale2.de'] = array(
                "url"      =>             "http://board.nostale.de/index.php?page=ThreadsFeed&format=rss2&boardID=398",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/nostale2.db",
                "output"   =>             "[NosTale.de] @@item!title@@ - @@item!link@@",
);

$feeds['4story.de'] = array(
                "url"      =>             "http://www.4story.de/news/rss",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/4story.db",
                "output"   =>             "[4Story.de] @@item!title@@ - @@item!link@@ @@item!time@@",
);

$feeds['ogame.de'] = array(
                "url"      =>             "http://board.ogame.de/index.php?page=ThreadsFeed&format=rss2&boardID=27",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/ogame.db",
                "output"   =>             "[OGame.de] @@item!title@@ - @@item!link@@",
);
		
$feeds['metin2.de'] = array(
                "url"      =>             "http://board.metin2.de/index.php?page=ThreadsFeed&format=rss2&boardID=23",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/metin2.db",
                "output"   =>             "[Metin2.de] @@item!title@@ - @@item!link@@",
);
		
$feeds['airrivals.de'] = array(
                "url"      =>             "http://board.airrivals.de/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/airrivals.db",
                "output"   =>             "[Airrivals.de] @@item!title@@ - @@item!link@@",
);

$feeds['elsword.de'] = array(
                "url"      =>             "http://board.elsword.de/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/elsword.db",
                "output"   =>             "[Elsword.de] @@item!title@@ - @@item!link@@",
);	
$feeds['battleknight.de'] = array(
                "url"      =>             "http://board.battleknight.de/index.php?page=ThreadsFeed&format=rss2&boardID=23",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/battleknight.db",
                "output"   =>             "[BattleKnight.de] @@item!title@@ - @@item!link@@",
);	
$feeds['tanoth.de'] = array(
                "url"      =>            "http://board.tanoth.de/index.php?page=ThreadsFeed&format=rss2&boardID=106",
                "channels" =>            "#nexus-test",
                "database" =>             "NexusNews/scripts/db/tanoth.db",
                "output"   =>             "[Tanoth.de] @@item!title@@ - @@item!link@@",
);
$feeds['ikariam.de'] = array(
                "url"      =>             "http://board.de.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/ikariam.db",
                "output"   =>             "[Ikariam.de] @@item!title@@ - @@item!link@@",
);
$feeds['bitefight.de'] = array(
                "url"      =>             "http://board.bitefight.de/index.php?page=ThreadsFeed&format=rss2&boardID=294",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/bitefight.db",
                "output"   =>             "[BiteFight.de] @@item!title@@ - @@item!link@@",
);
$feeds['gladiatus.de'] = array(
                "url"      =>             "http://board.gladiatus.de/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/gladiatus.db",
                "output"   =>             "[Gladiatus.de] @@item!title@@ - @@item!link@@",
);

$feeds['wildguns.de'] = array(
                "url"      =>             "http://board.wildguns.de/index.php?page=ThreadsFeed&format=rss2&boardID=2",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/wildguns.db",
                "output"   =>             "[WildGuns.de] @@item!title@@ - @@item!link@@",
);

$feeds['kingsage.de'] = array(
                "url"      =>             "http://board.kingsage.de/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/kingsage.db",
                "output"   =>             "[KingsAge.de] @@item!title@@ - @@item!link@@",
);
$feeds['wizard101.de'] = array(
                "url"      =>             "http://board.wizard101.de/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/wizard101.db",
                "output"   =>             "[Wizard101.de] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.de'] = array(
                "url"      =>             "http://board.gladiatus.de/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/gladiatus.db",
                "output"   =>             "[Gladiatus.de] @@item!title@@ - @@item!link@@",
);
$feeds['gameforge.de'] = array(
                "url"      =>             "http://press.gameforge.com/rss/?region=Germany",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/gameforgeag.db",
                "output"   =>             "[Gameforge AG] @@item!title@@ - @@item!link@@",
);
$feeds['aion.de'] = array(
                "url"      =>             "http://board.de.aionfreetoplay.com/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/gameforgeag.db",
                "output"   =>             "[board.de.aionfreetoplay.com] @@item!title@@ - @@item!link@@",
);
$feeds['aion.fr'] = array(
                "url"      =>             "http://board.fr.aionfreetoplay.com/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/gameforgeag.db",
                "output"   =>             "[board.fr.aionfreetoplay.com] @@item!title@@ - @@item!link@@",
);
$feeds['aion.com'] = array(
                "url"      =>             "http://board.en.aionfreetoplay.com/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db/gameforgeag.db",
                "output"   =>             "[board.en.aionfreetoplay.com] @@item!title@@ - @@item!link@@",
);
$feeds['nostale.co.uk'] = array(
                "url"      =>             "http://board.nostale.co.uk/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/nostale.db",
                "output"   =>             "[NosTale.co.uk] @@item!title@@ - @@item!link@@",
);
		
$feeds['ogame.org'] = array(
                "url"      =>             "http://board.ogame.org/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/ogame.db",
                "output"   =>             "[OGame.org] @@item!title@@ - @@item!link@@",
);
		
$feeds['ogame.origin'] = array(
                "url"      =>             "http://board.origin.ogame.de/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/ogame_origin.db",
                "output"   =>             "[OGame.Origin] @@item!title@@ - @@item!link@@",
);
$feeds['metin2.co.uk'] = array(
                "url"      =>             "http://board.metin2.co.uk/index.php?page=ThreadsFeed&format=rss2&boardID=104",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/metin2.db",
                "output"   =>             "[Metin2.co.uk] @@item!title@@ - @@item!link@@",
);
		
$feeds['airrivals.net'] = array(
                "url"      =>             "http://board.airrivals.net/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/airrivals.db",
                "output"   =>             "[AirRivals.net] @@item!title@@ - @@item!link@@",
);
		
$feeds['battleknight.co.uk'] = array(
                "url"      =>             "http://board.battleknight.co.uk/index.php?page=ThreadsFeed&format=rss2&boardID=13",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/battleknight.db",
                "output"   =>             "[BattleKnight.co.uk] @@item!title@@ - @@item!link@@",
);
		
$feeds['tanoth.co.uk'] = array(
                "url"      =>             "http://board.tanoth.co.uk/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/tanoth.db",
                "output"   =>             "[Tanoth.co.uk] @@item!title@@ - @@item!link@@",
);
$feeds['ikariam.com'] = array(
                "url"      =>             "http://board.en.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/ikariam.db",
                "output"   =>             "[Ikariam.com] @@item!title@@ - @@item!link@@",
);
		
$feeds['bitefight.org'] = array(
                "url"      =>             "http://board.bitefight.org/index.php?page=ThreadsFeed&format=rss2&boardID=23",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/bitefight.db",
                "output"   =>             "[BiteFight.org] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.com'] = array(
                "url"      =>             "http://board.gladiatus.com/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/gladiatus.db",
                "output"   =>             "[Gladiatus.com] @@item!title@@ - @@item!link@@",
);

$feeds['wildguns.co.uk'] = array(
                "url"      =>             "http://board.wildguns.co.uk/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/wildguns.db",
                "output"   =>             "[WildGuns.co.uk] @@item!title@@ - @@item!link@@",
);
$feeds['kingsage.org'] = array(
                "url"      =>             "http://board.kingsage.org/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/kingsage.db",
                "output"   =>             "[KingsAge.org] @@item!title@@ - @@item!link@@",
);

$feeds['wizard101.co.uk'] = array(
                "url"      =>             "http://board.wizard101.co.uk/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/wizard101.db",
                "output"   =>             "[Wizard101.co.uk] @@item!title@@ - @@item!link@@",
);
	
$feeds['gladiatus.co.uk'] = array(
                "url"      =>             "http://board.gladiatus.co.uk/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/gladiatus.db",
                "output"   =>             "[Gladiatus.co.uk] @@item!title@@ - @@item!link@@",
);
	
$feeds['4story.co.uk'] = array(
                "url"      =>             "http://www.4story.co.uk/news/rss",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/4story.db",
                "output"   =>             "[4Story.co.uk] @@item!title@@ - @@item!link@@",
);

$feeds['gameforge.com'] = array(
                "url"      =>             "http://press.gameforge.com/rss/?region=United+Kingdom",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_en/gameforgeag.db",
                "output"   =>             "[Gameforge AG] @@item!title@@ - @@item!link@@",
);
$feeds['ikariam.ir'] = array(
                "url"      =>             "http://board.ir.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ir/ikariam.db",
                "output"   =>             "[Ikariam.ir] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.ir'] = array(
                "url"      =>             "http://board.ir.gladiatus.com/index.php?page=ThreadsFeed&format=rss2&boardID=23",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ir/gladiatus.db",
                "output"   =>             "[Gladiatus.ir] @@item!title@@ - @@item!link@@",
);

$feeds['wizard101.it'] = array(
                "url"      =>             "http://board.wizard101.it/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/wizard101.db",
                "output"   =>             "[Wizard101.it] @@item!title@@ - @@item!link@@",
);

$feeds['4story.it'] = array(
                "url"      =>             "http://www.4story.it/news/rss",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/4story.db",
                "output"   =>             "[4Story.it] @@item!title@@ - @@item!link@@",
);
$feeds['metin2.it'] = array(
                "url"      =>             "http://board.metin2.it/index.php?page=ThreadsFeed&format=rss2&boardID=690",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/metin2.db",
                "output"   =>             "[Metin2.it] @@item!title@@ - @@item!link@@",
);

$feeds['nostale.it'] = array(
                "url"      =>             "http://board.nostale.it/index.php?page=ThreadsFeed&format=rss2&boardID=266",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/nostale.db",
                "output"   =>             "[NosTale.it] @@item!title@@ - @@item!link@@",
);

$feeds['airrivals.it'] = array(
                "url"      =>             "http://board.airrivals.it/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/airrivals.db",
                "output"   =>             "[AirRivals.it] @@item!title@@ - @@item!link@@",
);

$feeds['ikariam.it'] = array(
                "url"      =>             "http://board.it.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/ikariam.db",
                "output"   =>             "[Ikariam.it] @@item!title@@ - @@item!link@@",
);
$feeds['bitefight.it'] = array(
                "url"      =>             "http://board.bitefight.it/index.php?page=ThreadsFeed&format=rss2&boardID=23",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/bitefight.db",
                "output"   =>             "[BiteFight.it] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.it'] = array(
                "url"      =>             "http://board.gladiatus.it/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/gladiatus.db",
                "output"   =>             "[Gladiatus.it] @@item!title@@ - @@item!link@@",
);

$feeds['battleknight.it'] = array(
                "url"      =>             "http://board.battleknight.it/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/battleknight.db",
                "output"   =>             "[BattleKnight.it] @@item!title@@ - @@item!link@@",
);

$feeds['ogame.it'] = array(
                "url"      =>             "http://board.ogame.it/index.php?page=ThreadsFeed&format=rss2&boardID=2",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/ogame.db",
                "output"   =>             "[OGame.it] @@item!title@@ - @@item!link@@",
);

$feeds['tanoth.it'] = array(
                "url"      =>             "http://board.tanoth.it/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/tanoth.db",
                "output"   =>             "[Thanot.it] @@item!title@@ - @@item!link@@",
);
$feeds['kingsage.it'] = array(
                "url"      =>             "http://board.kingsage.it/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/kingsage.db",
                "output"   =>             "[KingsAge.it] @@item!title@@ - @@item!link@@",
);

$feeds['wildguns.it'] = array(
                "url"      =>             "http://board.wildguns.it/index.php?page=ThreadsFeed&format=rss2&boardID=2",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/wildguns.db",
                "output"   =>             "[WildGuns.it] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.it'] = array(
                "url"      =>             "http://board.gladiatus.it/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_it/gladiatus.db",
                "output"   =>             "[Gladiatus.it] @@item!title@@ - @@item!link@@",
);

$feeds['4story.pl'] = array(
                "url"      =>             "http://www.4story.pl/news/rss",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/4story.db",
                "output"   =>             "[4Story.pl] @@item!title@@ - @@item!link@@",
);

$feeds['metin2.pl'] = array(
                "url"      =>             "http://board.metin2.pl/index.php?page=ThreadsFeed&format=rss2&boardID=215",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/metin2.db",
                "output"   =>             "[Metin2.pl] @@item!title@@ - @@item!link@@",
);

$feeds['airrivals.pl'] = array(
                "url"      =>             "http://board.airrivals.pl/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/airrivals.db",
                "output"   =>             "[AirRivals.pl] @@item!title@@ - @@item!link@@",
);

$feeds['nostale.pl'] = array(
                "url"      =>             "http://board.nostale.pl/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/nostale.db",
                "output"   =>             "[NosTale.pl] @@item!title@@ - @@item!link@@",
);


$feeds['ikariam.pl'] = array(
                "url"      =>             "http://board.pl.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=18",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/ikariam.db",
                "output"   =>             "[Ikariam.pl] @@item!title@@ - @@item!link@@",
);

$feeds['bitefight.pl'] = array(
                "url"      =>             "http://board.bitefight.pl/index.php?page=ThreadsFeed&format=rss2&boardID=335",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/bitefight.db",
                "output"   =>             "[BiteFight.pl] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.pl'] = array(
                "url"      =>             "http://board.gladiatus.pl/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/gladiatus.db",
                "output"   =>             "[Gladiatus.pl] @@item!title@@ - @@item!link@@",
);

$feeds['battleknight.pl'] = array(
                "url"      =>             "http://board.battleknight.pl/index.php?page=ThreadsFeed&format=rss2&boardID=416",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/battleknight.db",
                "output"   =>             "[BattleKnight.pl] @@item!title@@ - @@item!link@@",
);

$feeds['ogame.pl'] = array(
                "url"      =>             "http://board.ogame.pl/index.php?page=ThreadsFeed&format=rss2&boardID=784",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/ogame.db",
                "output"   =>             "[OGame.pl] @@item!title@@ - @@item!link@@",
);

$feeds['tanoth.pl'] = array(
                "url"      =>             "http://board.tanoth.pl/index.php?page=ThreadsFeed&format=rss2&boardID=8",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/tanoth.db",
                "output"   =>             "[Tanoth.pl] @@item!title@@ - @@item!link@@",
);

$feeds['kingsage.pl'] = array(
                "url"      =>             "http://board.kingsage.pl/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/kingsage.db",
                "output"   =>             "[KingsAge.pl] @@item!title@@ - @@item!link@@",
);

$feeds['wildguns.pl'] = array(
                "url"      =>             "http://board.wildguns.pl/index.php?page=ThreadsFeed&format=rss2&boardID=2",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/wildguns.db",
                "output"   =>             "[WildGuns.pl] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.pl'] = array(
                "url"      =>             "http://board.gladiatus.pl/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_pl/gladiatus.db",
                "output"   =>             "[Gladiatus.pl] @@item!title@@ - @@item!link@@",
);

$feeds['metin2.ru'] = array(
                "url"      =>             "http://board.metin2.ru/index.php?page=ThreadsFeed&format=rss2&boardID=23",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/metin2.db",
                "output"   =>             "[Metin2.ru] @@item!title@@ - @@item!link@@",
);

$feeds['nostale.ru'] = array(
                "url"      =>             "http://board.nostale.ru/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/nostale.db",
                "output"   =>             "[NosTale.ru] @@item!title@@ - @@item!link@@",
);

$feeds['ikariam.ru'] = array(
                "url"      =>             "http://board.ru.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=23",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/ikariam.db",
                "output"   =>             "[Ikariam.ru] @@item!title@@ - @@item!link@@",
);

$feeds['bitefight.ru'] = array(
                "url"      =>             "http://board.bitefight.ru/index.php?page=ThreadsFeed&format=rss2&boardID=23",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/bitefight.db",
                "output"   =>             "[BiteFight.ru] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.ru'] = array(
                "url"      =>             "http://board.gladiatus.ru/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/gladiatus.db",
                "output"   =>             "[Gladiatus.ru] @@item!title@@ - @@item!link@@",
);

$feeds['battleknight.ru'] = array(
                "url"      =>             "http://board.battleknight.ru/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/battleknight.db",
                "output"   =>             "[BattleKnight.ru] @@item!title@@ - @@item!link@@",
);

$feeds['ogame.ru'] = array(
                "url"      =>             "http://board.ogame.ru/index.php?page=ThreadsFeed&format=rss2&boardID=27",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/ogame.db",
                "output"   =>             "[OGame.ru] @@item!title@@ - @@item!link@@",
);

$feeds['tanoth.ru'] = array(
                "url"      =>             "http://board.tanoth.ru/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/tanoth.db",
                "output"   =>             "[Tanoth.ru] @@item!title@@ - @@item!link@@",
);

$feeds['kingsage.ru'] = array(
                "url"      =>             "http://board.kingsage.ru/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/kingsage.db",
                "output"   =>             "[KingsAge.ru] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.ru'] = array(
                "url"      =>             "http://board.gladiatus.ru/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_ru/gladiatus.db",
                "output"   =>             "[Gladiatus.ru] @@item!title@@ - @@item!link@@",
);

$feeds['wizard101.es'] = array(
                "url"      =>             "http://board.wizard101.es/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/wizard101.db",
                "output"   =>             "[Wizard101.es] @@item!title@@ - @@item!link@@",
);

$feeds['4story.es'] = array(
                "url"      =>             "http://www.4story.es/news/rss",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/4story.db",
                "output"   =>             "[4Story.es] @@item!title@@ - @@item!link@@",
);

$feeds['metin2.es'] = array(
                "url"      =>             "http://board.metin2.es/index.php?page=ThreadsFeed&format=rss2&boardID=187",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/metin2.db",
                "output"   =>             "[Metin2.es] @@item!title@@ - @@item!link@@",
);

$feeds['airrivals.es'] = array(
                "url"      =>             "http://board.airrivals.es/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/airrivals.db",
                "output"   =>             "[AirRivals.es] @@item!title@@ - @@item!link@@",
);

$feeds['nostale.org'] = array(
                "url"      =>             "http://board.nostale.org/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/nostale.db",
                "output"   =>             "[NosTale.org] @@item!title@@ - @@item!link@@",
);

$feeds['ikariam.es'] = array(
                "url"      =>             "http://board.es.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/ikariam.db",
                "output"   =>             "[Ikariam.es] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.es'] = array(
                "url"      =>             "http://board.gladiatus.es/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/gladiatus.db",
                "output"   =>             "[Gladiatus.es] @@item!title@@ - @@item!link@@",
);

$feeds['battleknight.es'] = array(
                "url"      =>             "http://board.battleknight.es/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/battleknight.db",
                "output"   =>             "[BattleKnight.es] @@item!title@@ - @@item!link@@",
);

$feeds['ogame.es'] = array(
                "url"      =>             "http://board.ogame.com.es/index.php?page=ThreadsFeed&format=rss2&boardID=154",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/ogame.db",
                "output"   =>             "[OGame.es] @@item!title@@ - @@item!link@@",
);

$feeds['tanoth.es'] = array(
                "url"      =>             "http://board.tanoth.es/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/tanoth.db",
                "output"   =>             "[Tanoth.es] @@item!title@@ - @@item!link@@",
);

$feeds['kingsage.es'] = array(
                "url"      =>             "http://board.kingsage.es/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/kingsage.db",
                "output"   =>             "[KingsAge.es] @@item!title@@ - @@item!link@@",
);

$feeds['wildguns.es'] = array(
                "url"      =>             "http://board.wildguns.es/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/wildguns.db",
                "output"   =>             "[WildGuns.es] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.es'] = array(
                "url"      =>             "http://board.gladiatus.es/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_es/gladiatus.db",
                "output"   =>             "[Gladiatus.es] @@item!title@@ - @@item!link@@",
);

$feeds['wizard101.fr'] = array(
                "url"      =>             "http://board.wizard101.fr/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/wizard101.db",
                "output"   =>             "[Wizard101.fr] @@item!title@@ - @@item!link@@",
);

$feeds['4story.fr'] = array(
                "url"      =>             "http://www.4story.fr/news/rss",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/4story.db",
                "output"   =>             "[4Story.fr] @@item!title@@ - @@item!link@@",
);

$feeds['metin2.fr'] = array(
                "url"      =>             "http://board.metin2.fr/index.php?page=ThreadsFeed&format=rss2&boardID=100",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/metin2.db",
                "output"   =>             "[Metin2.fr] @@item!title@@ - @@item!link@@",
);

$feeds['airrivals.fr'] = array(
                "url"      =>             "http://board.airrivals.fr/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/airrivals.db",
                "output"   =>             "[AirRivals.fr] @@item!title@@ - @@item!link@@",
);

$feeds['nostale.fr'] = array(
                "url"      =>             "http://board.nostale.fr/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/nostale.db",
                "output"   =>             "[NosTale.fr] @@item!title@@ - @@item!link@@",
);

$feeds['elsword.fr'] = array(
                "url"      =>             "http://board.elsword.fr/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/elsword.db",
                "output"   =>             "[Elsword.fr] @@item!title@@ - @@item!link@@",
);

$feeds['ikariam.fr'] = array(
                "url"      =>             "http://board.fr.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/ikariam.db",
                "output"   =>             "[Ikariam.fr] @@item!title@@ - @@item!link@@",
);

$feeds['bitefight.fr'] = array(
                "url"      =>             "http://board.bitefight.fr/index.php?page=ThreadsFeed&format=rss2&boardID=283",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/bitefight.db",
                "output"   =>             "[BiteFight.fr] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.fr'] = array(
                "url"      =>             "http://board.gladiatus.fr/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/gladiatus.db",
                "output"   =>             "[Gladiatus.fr] @@item!title@@ - @@item!link@@",
);

$feeds['battleknight.fr'] = array(
                "url"      =>             "http://board.battleknight.fr/index.php?page=ThreadsFeed&format=rss2&boardID=9",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/battleknight.db",
                "output"   =>             "[BattleKnight.fr] @@item!title@@ - @@item!link@@",
);

$feeds['ogame.fr'] = array(
                "url"      =>             "http://board.ogame.fr/index.php?page=ThreadsFeed&format=rss2&boardID=27",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/ogame.db",
                "output"   =>             "[OGame.fr] @@item!title@@ - @@item!link@@",
);

$feeds['tanoth.fr'] = array(
                "url"      =>             "http://board.tanoth.fr/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/tanoth.db",
                "output"   =>             "[Tanoth.fr] @@item!title@@ - @@item!link@@",
);

$feeds['wizard101.fr'] = array(
                "url"      =>             "http://board.wizard101.fr/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/wizard101.db",
                "output"   =>             "[Wizard101.fr] @@item!title@@ - @@item!link@@",
);

$feeds['kingsage.fr'] = array(
                "url"      =>             "http://board.kingsage.fr/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/kingsage.db",
                "output"   =>             "[KingsAge.fr] @@item!title@@ - @@item!link@@",
);

$feeds['wildguns.fr'] = array(
                "url"      =>             "http://board.wildguns.fr/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/wildguns.db",
                "output"   =>             "[WildGuns.fr] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.fr'] = array(
                "url"      =>             "http://board.gladiatus.fr/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_fr/gladiatus.db",
                "output"   =>             "[Gladiatus.fr] @@item!title@@ - @@item!link@@",
);

$feeds['gatesofandaron.com'] = array(
                "url"      =>             "http://www.gatesofandaron.com/news/rss",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/gatesofandaron.db",
                "output"   =>             "[GatesOfAndaron.com] @@item!title@@ - @@item!link@@",
);

$feeds['metin2.com'] = array(
                "url"      =>             "http://board.metin2.com/index.php?page=ThreadsFeed&format=rss2&boardID=3",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/metin2.db",
                "output"   =>             "[Metin2.com] @@item!title@@ - @@item!link@@",
);

$feeds['ikariam.us'] = array(
                "url"      =>             "http://board.us.ikariam.com/index.php?page=ThreadsFeed&format=rss2&boardID=2",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/ikariam.db",
                "output"   =>             "[Ikariam.us] @@item!title@@ - @@item!link@@",
);

$feeds['bitefight.us'] = array(
                "url"      =>             "http://board.bitefight.us/index.php?page=ThreadsFeed&format=rss2&boardID=260",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/bitefight.db",
                "output"   =>             "[BiteFight.us] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.us'] = array(
                "url"      =>             "http://board.gladiatus.us/index.php?page=ThreadsFeed&format=rss2&boardID=2",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/gladiatus.db",
                "output"   =>             "[Gladiatus.us] @@item!title@@ - @@item!link@@",
);

$feeds['battleknight.us'] = array(
                "url"      =>             "http://board.battleknight.us/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/battleknight.db",
                "output"   =>             "[BattleKnight.us] @@item!title@@ - @@item!link@@",
);

$feeds['ogame.us'] = array(
                "url"      =>             "http://board.ogame.us/index.php?page=ThreadsFeed&format=rss2&boardID=174",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/ogame.db",
                "output"   =>             "[OGame.us] @@item!title@@ - @@item!link@@",
);

$feeds['tanoth.us'] = array(
                "url"      =>             "http://board.tanoth.us/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/tanoth.db",
                "output"   =>             "[Tanoth.us] @@item!title@@ - @@item!link@@",
);

$feeds['kingsage.com'] = array(
                "url"      =>             "http://board.kingsage.com/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/kingsage.db",
                "output"   =>             "[KingsAge.com] @@item!title@@ - @@item!link@@",
);

$feeds['wildguns.us'] = array(
                "url"      =>             "http://board.wildguns.us/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/wildguns.db",
                "output"   =>             "[WildGuns.us] @@item!title@@ - @@item!link@@",
);

$feeds['gladiatus.us'] = array(
                "url"      =>             "http://board.gladiatus.us/index.php?page=ThreadsFeed&format=rss2&boardID=1",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_us/gladiatus.db",
                "output"   =>             "[Gladiatus.us] @@item!title@@ - @@item!link@@",
);

$feeds['ogame.br'] = array(
                "url"      =>             "http://board.ogame.com.br/index.php?page=ThreadsFeed&format=rss2&boardID=52",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_br/ogame.db",
                "output"   =>             "[OGame.br] @@item!title@@ - @@item!link@@",
);

$feeds['bitefight.br'] = array(
                "url"      =>             "http://board.br.bitefight.org/index.php?page=ThreadsFeed&format=rss2&boardID=136",
                "channels" =>             "#nexus-test",
                "database" =>             "NexusNews/scripts/db_br/bitefight.db",
                "output"   =>             "[BiteFight.br] @@item!title@@ - @@item!link@@",
);
?>