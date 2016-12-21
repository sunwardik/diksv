<?php
	$dblocation='localhost';
	$dbname='diksv';
	$dbuser='root';
	$dbpass='';
	$dbport=3307;
$dbcon=mysqli_connect($dblocation,
					$dbuser,
					$dbpass,
					$dbname,
					$dbport);
if(!$dbcon){
	exit('error connect');
}