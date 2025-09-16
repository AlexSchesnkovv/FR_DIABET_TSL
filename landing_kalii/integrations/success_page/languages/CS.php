<?php
// Чешский
$base_array = array(
    'name' => 'Název:',
    'phone' => 'Telefonní číslo:',
    'return' => 'Vrátit se',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Děkuji',
    'text-1' => 'Děkujeme za Vaši objednávku!',
    'text-2' => 'Naši specialisté vás budou kontaktovat',
    'text-3' => 'Ujistěte se, že jste zadali:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Chyba',
    'text-1' => 'Došlo k chybě',
    'text-2' => 'Vraťte se na hlavní stránku a zkuste to znovu',
    'text-3' => 'Ujistěte se, že jste zadali:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Děkuji',
    'text-1' => 'Vaše objednávka se již zpracovává!',
    'text-2' => 'Naši specialisté vás budou kontaktovat',
    'text-3' => 'Údaje, které jste poskytli:',
));
