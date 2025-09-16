<?php
// Словенский
$base_array = array(
    'name' => 'Ime:',
    'phone' => 'Telefonska številka:',
    'return' => 'Vrnitev',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Hvala vam',
    'text-1' => 'Hvala za vaše naročilo!',
    'text-2' => 'Naši strokovnjaki vas bodo kontaktirali',
    'text-3' => 'Ne pozabite vnesti:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Napaka',
    'text-1' => 'Prišlo je do napake',
    'text-2' => 'Vrnite se na glavno stran in poskusite znova',
    'text-3' => 'Ne pozabite vnesti:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Hvala vam',
    'text-1' => 'Vaše naročilo je že v obdelavi!',
    'text-2' => 'Naši strokovnjaki vas bodo kontaktirali',
    'text-3' => 'Podatki, ki ste jih posredovali:',
));
