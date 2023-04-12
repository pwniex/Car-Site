<?php
	$db= @new mysqli('localhost', 'root', 'root', 'bessah');
    $db->set_charset("utf8");
    $query1="SELECT * FROM kullanici";
  	$result1 = $db->query($query1);
  		

?>