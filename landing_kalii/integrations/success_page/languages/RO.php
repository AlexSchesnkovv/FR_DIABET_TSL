<?php
// Румынский
$base_array = array(
    'name' => 'Nume:',
    'phone' => 'Număr de telefon:',
    'return' => 'Întoarcere',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Mulțumesc',
    'text-1' => 'Vă mulțumim pentru comanda dumneavoastră!',
    'text-2' => 'Experții noștri vă vor contacta',
    'text-3' => 'Asigurați-vă că ați introdus:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Eroare',
    'text-1' => 'a avut loc o eroare',
    'text-2' => 'Reveniți la pagina principală și încercați din nou',
    'text-3' => 'Asigurați-vă că ați introdus:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Mulțumesc',
    'text-1' => 'Comanda dvs. este deja procesată!',
    'text-2' => 'Experții noștri vă vor contacta',
    'text-3' => 'Datele pe care le-ați furnizat:',
));
