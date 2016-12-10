<?php
require_once(dirname(__FILE__)."/config.php");

foreach ($config as $r => $h) {
	echo "screen -d -S $r -m /opt/fosdem/scripts/imgmaker.sh ".dirname(__FILE__)."/$r $h\n";
}
