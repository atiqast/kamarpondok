<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>KamarPondok</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/buttons.bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top bg-navbar" id="bawah">
	<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand"><strong class="color-navbar">Manajemen Kamar Pondok</strong></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="tampil_kamar.php">Data Kamar</a>
				</li>
				<li>
					<a href="config/logout.php">Keluar <i class="glyphicon glyphicon-off"></i></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="container-fluid">