<?php
// Боснийский
$base_array = array(
    'name' => 'Ime:',
    'phone' => 'Telefonski broj:',
    'return' => 'Povratak',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Hvala ti',
    'text-1' => 'Hvala vam za narudžbu!',
    'text-2' => 'Naši stručnjaci će Vas kontaktirati',
    'text-3' => 'Obavezno unesite:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Greška',
    'text-1' => 'Došlo je do greške',
    'text-2' => 'Vratite se na glavnu stranicu i pokušajte ponovo',
    'text-3' => 'Obavezno unesite:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Hvala ti',
    'text-1' => 'Vaša narudžba je već u obradi!',
    'text-2' => 'Naši stručnjaci će Vas kontaktirati',
    'text-3' => 'Podaci koje ste dali:',
));
