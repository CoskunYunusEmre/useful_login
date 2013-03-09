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
 if(session_unregister('girisID') == true && session_unregister('kullaniciAdi') == true){
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
