<link href="https://stackpath.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" type="text/css">

<?php

	$alertJSON = json_decode(file_get_contents('alerts.json'),true);

	foreach($alertJSON as $d){
		//echo $d['name'].' % '.$d['type'].' % '.$d['content']."\n";
		echo '<div class="container"><div class="alert alert-'.$d['type'].'">'.$d['content'].'</div></div>';
	}

?>
