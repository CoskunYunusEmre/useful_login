<?php
/*
 * Yunus Emre COSKUN
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Sayfa baslangic bilgileri
 */

// Oturum baslangici
session_start();

// Harici dosya baglantilari
require_once('includes/php/dbconnect.php'); // Veritabani baglanti bilgilerine baglanti -Database Conn.
require_once('includes/php/functions.php'); // Fonksiyon baglantilari - Functions

$passCCode="sF)eS4arcdB7"; // Parola icin karistirma kodu - Password Confusion Code
?>
<html>
	<head>            
            <?php
                include 'includes/html/meta.html';
                include 'includes/html/title.html'; 
            ?>
	</head>
	<body>
