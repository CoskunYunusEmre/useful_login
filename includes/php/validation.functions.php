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
	
	if(empty($kullaniciAdi)) {
                $errorMessage = "Kullanıcı Adı Boş Olamaz!";
                $_SESSION['errorMessage'] = $errorMessage;                
		return false; // Kullanici Adi bos ise yanlis olarak geri doner
	} // End of if
	if(strlen($kullaniciAdi) > $enFazlaKarakter) {
                $errorMessage = "Kullanıcı Adı $enFazlaKarakter Karakterden Fazla Olamaz!";
                $_SESSION['errorMessage'] = $errorMessage; 
		return false; // Kullanici Adi 30 karakterden fazla ise yanlis olarak geri doner
	} // End of if
	if(strlen($kullaniciAdi) < $enAzKarakter) {
                $errorMessage = "Kullanıcı Adı $enAzKarakter Karakterden Az Olamaz!";
                $_SESSION['errorMessage'] = $errorMessage; 
		return false; // Kullanici Adi 3 karakterden az ise yanlis olarak geri doner
	} // End of if
	
	$sonuc = preg_match("/^[A-Za-z0-9_\-]+$/", $kullaniciAdi); // Kullanici A'den Z'ye (ascii), a'dan z'ye(ascii)  ve 0-9 karakterlerin kullanimina izin verilir.
	
	if($sonuc){
            return true; // Gecersiz karakterler yoksa sonuc dogru olarak doner ve devam edilir.
	} // End of if
	else {
            $errorMessage = "Geçersiz Karakter Kullanımı! [A-Z,a-z,0-9]";
            $_SESSION['errorMessage'] = $errorMessage; 
            return false; // Gecersiz karakterler varsa sonuc yanlis olarak doner.
	} // End of else
    return false;	  
 } // End of dogru_kullaniciAdi()
 
 function dogru_parola($parola, $enAzKarakter= 6, $enFazlaKarakter= 15)
 {
 	$parola = trim($parola);
	if(empty($parola)) {
            $errorMessage = "Parola Boş Olamaz!";
            $_SESSION['errorMessage'] = $errorMessage; 
            return false;  // Parola bos ise yanlis olarak doner
	} // End of if
	if(strlen($parola) > $enFazlaKarakter) {
            $errorMessage = "Parola $enFazlaKarakter Karakterden Fazla Olamaz!";
            $_SESSION['errorMessage'] = $errorMessage; 
            return false; // Parola 15 karakterden buyukse yanlis olarak doner
	} // End of if
	if(strlen($parola) < $enAzKarakter) {
            $errorMessage = "Parola $enAzKarakter Karakterden Az Olamaz!";
            $_SESSION['errorMessage'] = $errorMessage; 
            return false; // Parola 6 karakterden kucukse yanlis olarak doner
	} // End of if
	$sonuc = preg_match("/^[A-Za-z0-9_\-]+$/", $parola); // Kullanici A'den Z'ye (ascii), a'dan z'ye(ascii)  ve 0-9 karakterlerin kullanimina izin verilir.
	
	if($sonuc) {
            return true; // Gecersiz karakterler yoksa sonuc dogru olarak doner ve devam edilir.
	} // End of if
	else {
            $errorMessage = "Geçersiz Karakter Kullanımı! [A-Z,a-z,0-9]";
            $_SESSION['errorMessage'] = $errorMessage; 
            return false; // Gecersiz karakterler varsa sonuc yanlis olarak doner.
	} // End of else
    return false;
 } // End of dogru_parola()
?>