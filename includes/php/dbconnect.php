<?php
/* 
 * Yunus Emre Coskun
 *
 * coshkhun [at] gmail [dot] com
 *
 *
 * Veritabanı Bağlantı Bilgileri
 */

// Veritabani Sunucusunun Adini Belirliyoruz

define ("VTSUNUCU", "localhost");

// Veritabani Kullanici Adini Belirliyoruz

define ("VTKULLANICI", "root");

// Veritabani Kullanici Parolasini Belirliyoruz.

define ("VTPAROLA", "");

// Veritbani Adini Belirliyoruz

define ("VTADI", "uf_login");


/* Veritabanına Bağlantı Yapıyoruz */

$baglan = mysql_connect(VTSUNUCU, VTKULLANICI, VTPAROLA) or die(' Bağlantı sağlanamadı... <br /> Lütfen sistem yöneticinizle iletişime geçiniz');

$vt = mysql_select_db(VTADI) or die(' Bağlantı sağlanamadı... <br /> Lütfen sistem yöneticinizle iletişime geçiniz');
?>