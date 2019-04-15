<?php

/* Tipe data CHAR */
$huruf = 'E';

/* Tipe data VARCHAR / STRING */
$teks = 'Hari ini saya belajar tipe data di PHP';

/* Tipe data Integer */
// Angka positif
$umur = 30;
// Angka negatif
$poin = -31;

/* Tipe data Float */
$panjang = 233.12;
$kapasistas = 13232.12;

// Tipe data Float dengan Eksponen
$jarak = 1.2E-5;

// E-5 artinya eksponen dari 10.
// Contoh di atas akan sama dengan 1.2 x 10-5. Kalau kita jabarkan akan menjadi 0.000012.

// Agar format float tidak tercetak dalam notasi E, kita bisa gunakan fungsi sprintf().

echo sprintf('%f', $jarak);

// Membatasi angka di belakang koma
// echo sprintf('%.3f', $jarak);

/* Tipe data Boolean */
$isActive = false;
$menikah = true;

/* Tipe Data Array */
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

/* Tipe Data Objek */
$cars = new Cars();

/* Tipe Data NULL */
$nama = NULL;
