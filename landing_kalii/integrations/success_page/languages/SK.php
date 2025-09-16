<?php
// Словацкий
$base_array = array(
    'name' => 'Názov:',
    'phone' => 'Telefónne číslo:',
    'return' => 'Návrat',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Ďakujem',
    'text-1' => 'Ďakujeme za vašu objednávku!',
    'text-2' => 'Naši špecialisti vás budú kontaktovať',
    'text-3' => 'Uistite sa, že ste zadali:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Chyba',
    'text-1' => 'Došlo k chybe',
    'text-2' => 'Vráťte sa na hlavnú stránku a skúste to znova',
    'text-3' => 'Uistite sa, že ste zadali:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Ďakujem',
    'text-1' => 'Vaša objednávka sa už spracováva!',
    'text-2' => 'Naši špecialisti vás budú kontaktovať',
    'text-3' => 'Údaje, ktoré ste poskytli:',
));
