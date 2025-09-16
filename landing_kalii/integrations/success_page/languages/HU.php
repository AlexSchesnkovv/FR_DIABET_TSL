<?php
// Венгерский
$base_array = array(
    'name' => 'Név:',
    'phone' => 'Telefonszám:',
    'return' => 'Visszatérés',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Köszönöm',
    'text-1' => 'Köszönöm a rendelését!',
    'text-2' => 'Szakembereink felveszik Önnel a kapcsolatot',
    'text-3' => 'Ügyeljen arra, hogy írja be:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Hiba',
    'text-1' => 'Hiba történt',
    'text-2' => 'Térjen vissza a főoldalra, és próbálja újra',
    'text-3' => 'Ügyeljen arra, hogy írja be:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Köszönöm',
    'text-1' => 'Megrendelése már feldolgozás alatt áll!',
    'text-2' => 'Szakembereink felveszik Önnel a kapcsolatot',
    'text-3' => 'Az Ön által megadott adatok:',
));
