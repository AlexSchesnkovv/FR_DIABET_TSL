<?php
// Индонезийский
$base_array = array(
    'name' => 'Nama:',
    'phone' => 'Nomor telepon:',
    'return' => 'Kembali',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Terima kasih',
    'text-1' => 'Terima kasih atas pesanan Anda!',
    'text-2' => 'Spesialis kami akan menghubungi Anda',
    'text-3' => 'Pastikan Anda memasukkan:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Kesalahan',
    'text-1' => 'Sebuah kesalahan telah terjadi',
    'text-2' => 'Kembali ke halaman utama dan coba lagi',
    'text-3' => 'Pastikan Anda memasukkan:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Terima kasih',
    'text-1' => 'Pesanan Anda sudah diproses!',
    'text-2' => 'Spesialis kami akan menghubungi Anda',
    'text-3' => 'Data yang Anda berikan:',
));
