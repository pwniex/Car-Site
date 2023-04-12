<?php include "admin/baglan.php"; ?>
<?php 
try {
	$db = new PDO("mysql:host=localhost;dbname=bessah;charset=utf8", "root", "root");
	//echo "BASARILI";
} catch ( PDOException $e ){
	print $e->getMessage();
	exit;
}

$cek=$db->query("SELECT * FROM binek")->fetch();

?>




