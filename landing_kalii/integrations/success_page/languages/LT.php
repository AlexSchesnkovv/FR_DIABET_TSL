<?php
// Литовский
$base_array = array(
    'name' => 'Vardas:',
    'phone' => 'Telefono numeris:',
    'return' => 'Grįžti',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Ačiū',
    'text-1' => 'Ačiū už jūsų užsakymą!',
    'text-2' => 'Mūsų specialistai susisieks su jumis',
    'text-3' => 'Būtinai įveskite:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Klaida',
    'text-1' => 'Įvyko klaida',
    'text-2' => 'Grįžkite į pagrindinį puslapį ir bandykite dar kartą',
    'text-3' => 'Būtinai įveskite:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Ačiū',
    'text-1' => 'Jūsų užsakymas jau apdorojamas!',
    'text-2' => 'Mūsų specialistai susisieks su jumis',
    'text-3' => 'Jūsų pateikti duomenys:',
));
