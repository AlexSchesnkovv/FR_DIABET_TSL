<?php
// Сербский
$base_array = array(
    'name' => 'Име:',
    'phone' => 'Број телефона:',
    'return' => 'Повратак',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Хвала вам',
    'text-1' => 'Хвала вам на наруџбини!',
    'text-2' => 'Наши стручњаци ће вас контактирати',
    'text-3' => 'Обавезно унесите:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Грешка',
    'text-1' => 'Дошло је до грешке',
    'text-2' => 'Вратите се на главну страницу и покушајте поново',
    'text-3' => 'Обавезно унесите:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Хвала вам',
    'text-1' => 'Ваша поруџбина је већ у обради!',
    'text-2' => 'Наши стручњаци ће вас контактирати',
    'text-3' => 'Подаци које сте дали:',
));
