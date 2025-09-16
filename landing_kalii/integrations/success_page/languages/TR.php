<?php
// Турецкий
$base_array = array(
    'name' => 'İsim:',
    'phone' => 'Telefon numarası:',
    'return' => 'Geri dönmek',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Teşekkür ederim',
    'text-1' => 'Siparişiniz için teşekkür ederiz!',
    'text-2' => 'Uzmanlarımız sizinle iletişime geçecek',
    'text-3' => 'Girdiğinizden emin olun:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Hata',
    'text-1' => 'bir hata oluştu',
    'text-2' => 'Ana sayfaya dönün ve tekrar deneyin',
    'text-3' => 'Girdiğinizden emin olun:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Teşekkür ederim',
    'text-1' => 'Siparişiniz zaten işleniyor!',
    'text-2' => 'Uzmanlarımız sizinle iletişime geçecek',
    'text-3' => 'Sağladığınız veriler:',
));
