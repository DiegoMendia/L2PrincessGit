<?php

$cacheFile = "cache/toppk.xml";
$genNew = 0;

if(!file_exists($cacheFile)) {
	$genNew = 1;
} else {
	
	$xml = simplexml_load_file($cacheFile);
	$configs = $xml->configs;
	$updated = intval($configs->updated);
	$delay = $cacheDelayMin;
	$rcount = intval($configs->rcount);
	
	if(($updated+($delay*60)) < time()) {
		$genNew = 1;
	}
	
	if($rcount != $countTopPlayers) {
		$genNew = 1;
	}
	
}

$dateReg = mktime($reg['hr'],$reg['min'],0,$reg['mes'],$reg['dia'],$reg['ano']);
if($showRankReg == 0 && time() < $dateReg) {
	$genNew = 1;
}

if($genNew) {
	
	if(!file_exists("cache")) { @mkdir("cache", 0775, true); @chmod("cache", 0775); }
	if(!file_exists("cache/index.html")) { $secIndexFile = fopen("cache/index.html","w+"); @fclose($secIndexFile); }
	if(!file_exists("cache/.htaccess")) { $secHtacsFile = fopen("cache/.htaccess","w+"); @fwrite($secHtacsFile, "Options -Indexes"); @fclose($secHtacsFile); }
	
	$wFile = fopen($cacheFile,"w+");
	
	$updated = time();
	$line = "\n<configs>\n<atualstudio>Cache script by Atualstudio.com</atualstudio>\n<updated>".$updated."</updated>\n<delay>".$cacheDelayMin."</delay>\n<rcount>".$countTopPlayers."</rcount>\n</configs>";
	
	if($showRankReg == 1 || ($showRankReg == 0 && time() > $dateReg)) {
		
		require_once('private/classes/classStats.php');
		
		$query = Stats::TopPk($countTopPlayers);
		if(count($query) > 0) {
			
			for($i=0, $c=count($query); $i < $c; $i++) {
				
				$dias = intval($query[$i]['onlinetime'] / 86400); $marcador = $query[$i]['onlinetime'] % 86400; $hora = intval($marcador / 3600); $marcador = $marcador % 3600; $minuto = intval($marcador / 60);
				
				$line .= "\n<line>\n";
				$line .= "<pos>".($i+1)."</pos>\n";
				$line .= "<name>".$query[$i]['char_name']."</name>\n";
				$line .= "<clan>".(empty($query[$i]['clan_name']) ? '-' : $query[$i]['clan_name'])."</clan>\n";
				$line .= "<pvp>".$query[$i]['pkkills']."</pvp>\n";
				$line .= "<pk>".$query[$i]['pkkills']."</pk>\n";
				$line .= "<otdays>".$dias."</otdays>\n";
				$line .= "<othrs>".$hora."</othrs>\n";
				$line .= "<otmin>".$minuto."</otmin>\n";
				$line .= "</line>";
				
			}
			
		} else {
			$deleteCache = 1;
		}
	
	} else {
		$deleteCache = 1;
	}
	
	@fwrite($wFile, utf8_encode("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<ranking>".$line."\n</ranking>"));
	@fclose($wFile);
	
	$xml = simplexml_load_file($cacheFile);
	
	if(isset($deleteCache) && file_exists($cacheFile)) {
		unlink($cacheFile);
	}
	
}

?>
	<?php
	
	$line = $xml->line;
	
	$countView = 10;
	if(count($line) < $countView) { $countView = count($line); }
	for($i=0, $c=$countView; $i < $c; $i++) {
		
		echo "
		<div".(($i % 1 == 0) ? " class='top-player flex-center'" : "").">
			<div class='number second'>".$line[$i]->pos."</div>
			<div class='nickname'>".$line[$i]->name."</div>
			<div class='kills' style='color: red;'>".$line[$i]->pk."</div>
		</div>
		
		";
		
	}
	
	?>
