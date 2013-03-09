<?php
 /*
 * Yunus Emre COSKUN
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Kullanici Cikis Sayfasi
 */

 session_start();
 if(isset($_SESSION['girisID']) == true && isset($_SESSION['kullaniciAdi']) == true){
 	session_destroy();
		header('Location: index.php');
 }
 else
 {
 	unset($_SESSION['girisID']);
	unset($_SESSION['kullaniciAdi']);
	session_destroy();
	header('Location: index.php');
 }
?>
