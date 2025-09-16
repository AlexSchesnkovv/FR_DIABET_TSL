<?php
// Тагальский
$base_array = array(
    'name' => 'Pangalan:',
    'phone' => 'Numero ng telepono:',
    'return' => 'Upang bumalik',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Salamat',
    'text-1' => 'Salamat sa iyong order!',
    'text-2' => 'Makikipag-ugnay sa iyo ang aming mga eksperto',
    'text-3' => 'Tiyaking nakapasok ka:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Pagkakamali',
    'text-1' => 'May naganap na error',
    'text-2' => 'Bumalik sa pangunahing pahina at subukang muli',
    'text-3' => 'Tiyaking nakapasok ka:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Salamat',
    'text-1' => 'Pinoproseso na ang iyong order!',
    'text-2' => 'Makikipag-ugnay sa iyo ang aming mga espesyalista',
    'text-3' => 'Ang data na iyong ibinigay:',
));
