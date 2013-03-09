<?php
 /* 
 * Yunus Emre COSKUN
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Giris Islemleri icin fonksiyonlar
 */
 
 function giris_yap() {
 	if(isset($_SESSION['girisID']) && isset($_SESSION['kullaniciAdi'])) {
		return true;
	} // End of if
	else {
		return false;
	} // End of else	
	return false;
 } // End of giris_yap()
 
 function giris_kontrol($kadi, $pass) {
 	global $passCCode;
	
	if(!dogru_kullaniciAdi($kadi) || !dogru_parola($pass) || !varolan_kullaniciAdi($kadi)) 
	{
		return false; // Girilen kullanici adi ve parolanin yazimi kontrol edilir.
	}
	
	$sqlSorgu = sprintf("SELECT girisID FROM kullanicilar WHERE kullaniciAdi='%s' AND parola='%s' AND pasif=0 AND aktif=1 LIMIT 1;",
		mysql_real_escape_string($kadi), mysql_real_escape_string(sha1($pass.$passCCode)));
		// Giriste verilen bilgiler veritabaninda cekilir.
		$sonuc = mysql_query($sqlSorgu);
		
		if(mysql_num_rows($sonuc) !=1)
		{
			return false;
		}
		else
		{
			$veri = mysql_fetch_array($sonuc);
			$_SESSION['girisID'] = $veri['girisID'];
			$_SESSION['kullaniciAdi'] = $kadi;			
			
			return true;
		}
		return false;
 }		
?>