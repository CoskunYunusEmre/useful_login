<?php
 /*
 * Yunus Emre COSKUN
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Giris Sayfasi
 */

 require_once "includes/php/functions.php";
 require_once "includes/php/display.functions.php";

//echo"<pre>";
//print_r($_SESSION);
//echo"</pre>";

 if(!giris_yap()) {
 	if(isset($_POST['girisYap'])) {
            if(giris_kontrol($_POST['kullaniciAdi'], $_POST['parola'])) {
			kullanici_bilgi_alanini_goster(); 
			anasayfayi_goster();
		} // End of if
		else {
                    echo "<script language=javascript>alert('Bilgiler Eksik/Hatalı')</script>";
                    giris_formunu_goster(); 
		} // End of else
	} // End of if
	else {
            giris_formunu_goster(); 
	} // End of else
} // End of if
else {
    kullanici_bilgi_alanini_goster();
    anasayfayi_goster();
} // End of else
?>
