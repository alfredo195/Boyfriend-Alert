<?php
	echo $_GET['key'];
	if($_GET['key'] == REDACTED){
    // Run in bg so page doesn't take entire runtime to load
		shell_exec("./run.py >/dev/null 2>/dev/null &");
	}
?>
