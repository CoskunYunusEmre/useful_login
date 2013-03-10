<?php
 /* 
 * Yunus Emre COSKUN
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Kullanici alani fonksiyonlari
 */
 
 function anasayfayi_goster() {	
	include_once ("main.php");
 } // End of anasayfayi_goster()

 function kullanici_bilgi_alanini_goster() {
    //Oturum bilgilerini alalim	
    $kullaniciAdi = $_SESSION['kullaniciAdi'];
    $kid = $_SESSION['girisID'];

    echo "
        <div id='kullaniciBilgiAlani'>
            <table width=100%>
                <tr>
                        <td>
                                $kullaniciAdi Hoş Geldiniz
                        </td>				
                        <td align='right'>
                                <a href='./logout.php'>Çıkış</a>
                        </td>
                        </tr>
                </table>					
	</div>";
 } // End of kullanici_bilgi_alanini_goster()

 function giris_formunu_goster($pasif = false) 
 {
    include 'includes/html/giris_formu.html';

    if($pasif == true) {
        echo 'pasif="pasif"';
    } // End of if
 } // End of giris_formunu_goster()
?>