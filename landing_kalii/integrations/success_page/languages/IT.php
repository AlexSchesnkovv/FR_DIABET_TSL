<?php
// Итальянский
$base_array = array(
    'name' => 'Nome:',
    'phone' => 'Numero di telefono:',
    'return' => 'Ritorno',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Grazie',
    'text-1' => 'Grazie per il vostro ordine!',
    'text-2' => 'I nostri specialisti ti contatteranno',
    'text-3' => 'Assicurati di inserire:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Errore',
    'text-1' => "C'è stato un errore",
    'text-2' => 'Torna alla pagina principale e riprova',
    'text-3' => 'Assicurati di inserire:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Grazie',
    'text-1' => 'Il tuo ordine è già in elaborazione!',
    'text-2' => 'I nostri specialisti ti contatteranno',
    'text-3' => 'I dati che hai fornito:',
));
