<?php
	if(isset($_request["valgus"])){
		$f=open("valgusandmed1.txt", "a");
		fwrite($f, intval($_REQUEST["valgus"].",".
		date("Y-m-d h:i:s")."\n"));
		fclouse($f);
		echo "Salvstati $_REQUEST["valgus"]";
	} else {
		echo "Valguse andmed puuduvad";
	}
	
?>