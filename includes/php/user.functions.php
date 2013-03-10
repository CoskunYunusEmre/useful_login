<?php
 /* 
 * Yunus Emre COSKUN
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Kullanici Islemleri icin fonksiyonlar
 */
  
 function varolan_kullaniciAdi($kullaniciAdi)
 {
 	if(!dogru_kullaniciAdi($kullaniciAdi)) {
            return false;
	} // End of if
	// Kullanicinin kayitli olup olmadigini kontrol edilir
	$sqlSorgu = sprintf("SELECT girisID FROM kullanicilar WHERE kullaniciAdi='%s' LIMIT 1", 
	mysql_real_escape_string($kullaniciAdi));
		
	$sonuc = mysql_query($sqlSorgu);
		
	if(mysql_num_rows($sonuc) > 0) {
            return true;
	} // End of if
	else {
            return false;
        } // End of else
    return false;
 } // End of varolan_kullaniciAdi
?>