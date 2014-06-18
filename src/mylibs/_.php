<?php

function d($msg) {
		if ($msg) {
			echo $msg . "<br>";
			return;
		}
		echo "<br>";
	}
	
function dp($msg) {
		var_dump ( $msg );
		echo $this.d( "" );
	}

