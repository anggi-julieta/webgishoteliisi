<?php
	$host = "ec2-34-200-106-49.compute-1.amazonaws.com";
	$user = "bunbjuhcbuakyn";
	$pass = "9503b63bb4d20327621c1b0fe03c072e865b6c24f50756d41687b920ad6237e9";
	$port = "5432";
	$dbname = "d1c4k5hk15mfn2";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
