<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "anjulie28_";
	$port = "5432";
	$dbname = "hotel";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>