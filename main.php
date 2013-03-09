<?php
 /*
 * Yunus Emre COSKUN
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Anasayfa
 */
 //require_once('includes/dbconnect.php');
 //require_once("header.php"); 
 require_once("includes/php/functions.php");
 require_once("includes/php/display.functions.php");
 require_once("includes/php/user.functions.php");
 require_once("includes/php/login.functions.php");
 require_once("includes/php/validation.functions.php");

 if(giris_yap() == true) {
    echo "<center>Başarılı Bir Şekilde Giriş Yaptınız.</center><p>";
    //Burada Sitemizi Kodlamaya Başlayabiliriz.
 } // End of if
 else {
    echo "
        <center>Lütfen önce giriş yapınız.</center><p>
	<a href='index.php'><center>Giriş Sayfasına Dönüş</center></a></p>";
 } // End of else

require_once("footer.php");
?>