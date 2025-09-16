<?php
// Албанский
$base_array = array(
    'name' => 'Emri:',
    'phone' => 'Numri i telefonit:',
    'return' => 'Kthimi',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Faleminderit',
    'text-1' => 'Faleminderit per porosine!',
    'text-2' => "Specialistët tanë do t'ju kontaktojnë",
    'text-3' => 'Sigurohuni që të futni:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Gabim',
    'text-1' => 'Një gabim ka ndodhur',
    'text-2' => 'Kthehuni në faqen kryesore dhe provoni përsëri',
    'text-3' => 'Sigurohuni që të futni:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Faleminderit',
    'text-1' => 'Porosia juaj tashmë është duke u përpunuar!',
    'text-2' => "Specialistët tanë do t'ju kontaktojnë",
    'text-3' => 'Të dhënat që keni dhënë:',
));
