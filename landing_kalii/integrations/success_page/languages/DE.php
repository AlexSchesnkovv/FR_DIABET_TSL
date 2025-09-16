<?php
// Немецкий
$base_array = array(
    'name' => 'Name:',
    'phone' => 'Telefonnummer:',
    'return' => 'Zurückkehren',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Danke',
    'text-1' => 'Vielen Dank für Ihre Bestellung!',
    'text-2' => 'Unsere Spezialisten werden sich mit Ihnen in Verbindung setzen',
    'text-3' => 'Stellen Sie sicher, dass Sie Folgendes eingeben:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Fehler',
    'text-1' => 'Ein Fehler ist aufgetreten',
    'text-2' => 'Kehren Sie zur Hauptseite zurück und versuchen Sie es erneut',
    'text-3' => 'Stellen Sie sicher, dass Sie Folgendes eingeben:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Danke',
    'text-1' => 'Ihre Bestellung wird bereits bearbeitet!',
    'text-2' => 'Unsere Spezialisten werden sich mit Ihnen in Verbindung setzen',
    'text-3' => 'Die von Ihnen bereitgestellten Daten:',
));
