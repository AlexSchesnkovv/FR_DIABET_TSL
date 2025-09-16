<?php
// Хорватский
$base_array = array(
    'name' => 'Ime:',
    'phone' => 'Broj telefona:',
    'return' => 'Povratak',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Hvala vam',
    'text-1' => 'Hvala na Vašoj Narudžbi!',
    'text-2' => 'Naši stručnjaci će vas kontaktirati',
    'text-3' => 'Provjerite jeste li unijeli:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Greška',
    'text-1' => 'Došlo je do pogreške',
    'text-2' => 'Vratite se na glavnu stranicu i pokušajte ponovno',
    'text-3' => 'Provjerite jeste li unijeli:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Hvala vam',
    'text-1' => 'Vaša narudžba je već u obradi!',
    'text-2' => 'Naši stručnjaci će vas kontaktirati',
    'text-3' => 'Podaci koje ste dali:',
));
