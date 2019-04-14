<?php

/**
 * SYARAT - SYARAT MEMBUAT VARIABLE PHP
 * - Variabel harus diawali dengan tanda $
 * - Variabel tidak boleh diawali dengan angka
 * - Variabel tidak boleh mengandung spasi
 * - Variabel tidak boleh mengandung karakter khusus seperti * dan ^
 * - Variabel bersifat Case Sensitive
 */

// Contoh yang salah
// $!nama = "";
// $46rosi = "";

// Contoh yang benar
$nama = "Yudi Andela";
$kegiatan = "Belajar PHP";

echo "Nama $nama, saat ini saya sedang $kegiatan";
