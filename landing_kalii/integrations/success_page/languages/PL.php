<?php
// Польский
$base_array = array(
    'name' => 'Nazwa:',
    'phone' => 'Numer telefonu:',
    'return' => 'Powrót',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Dziękuję',
    'text-1' => 'Dziękuję za Twoje zamówienie!',
    'text-2' => 'Nasi specjaliści skontaktują się z Tobą',
    'text-3' => 'Upewnij się, że wpisałeś:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Błąd',
    'text-1' => 'Wystąpił błąd',
    'text-2' => 'Wróć do strony głównej i spróbuj ponownie',
    'text-3' => 'Upewnij się, że wpisałeś:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Dziękuję',
    'text-1' => 'Twoje zamówienie jest już przetwarzane!',
    'text-2' => 'Nasi specjaliści skontaktują się z Tobą',
    'text-3' => 'Podane przez Ciebie dane:',
));
