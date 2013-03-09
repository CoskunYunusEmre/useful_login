<?php
 /* 
 * Yunus Emre COSKUN
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Bilgi dogrulama fonksiyonlari
 */
 
 function dogru_kullaniciAdi($kullaniciAdi, $enAzKarakter=3, $enFazlaKarakter=30)
 {
 	$kullaniciAdi = trim($kullaniciAdi);
	
	if(empty($kullaniciAdi))
	{
		return false; // Kullanici Adi bos ise yanlis olarak geri doner
	}
	if(strlen($kullaniciAdi) > $enFazlaKarakter)
	{
		return false; // Kullanici Adi 30 karakterden fazla ise yanlis olarak geri doner
	}
	if(strlen($kullaniciAdi) < $enAzKarakter)
	{
		return false; // Kullanici Adi 3 karakterden az ise yanlis olarak geri doner
	}
	
	$sonuc = ereg("^[A-Za-z0-9_\-]+$", $kullaniciAdi); // Kullanici A'den Z'ye (ascii), a'dan z'ye(ascii)  ve 0-9 karakterlerin kullanimina izin verilir.
	
	  if($sonuc)
	  {
	  	return true; // Gecersiz karakterler yoksa sonuc dogru olarak doner ve devam edilir.
	  }
	  else
	  {
	  	return false; // Gecersiz karakterler varsa sonuc yanlis olarak doner.
	  }
	  return false;
	  
 }
 
 function dogru_parola($parola, $enAzKarakter= 6, $enFazlaKarakter= 15)
 {
 	$parola = trim($parola);
	if(empty($parola))
	{
		return false;  // Parola bos ise yanlis olarak doner
	}
	if(strlen($parola) > $enFazlaKarakter)
	{
		return false; // Parola 15 karakterden buyukse yanlis olarak doner
	}
	if(strlen($parola) < $enAzKarakter)
	{
		return false; // Parola 6 karakterden kucukse yanlis olarak doner
	}
	$sonuc = ereg("^[A-Za-z0-9_\-]+$", $parola);
	
	if($sonuc)
	{
		return true;
	}
	else
	{
		return false;
	}
	return false;
 }
 
?>