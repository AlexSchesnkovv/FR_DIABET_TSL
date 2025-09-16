<?php
// Русский
$base_array = array(
    'name' => 'Имя:',
    'phone' => 'Номер телефона:',
    'return' => 'Вернуться',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Спасибо',
    'text-1' => 'Спасибо за ваш заказ!',
    'text-2' => 'Наши специалисты свяжутся с вами',
    'text-3' => 'Убедитесь, что вы ввели:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Ошибка',
    'text-1' => 'Произошла ошибка',
    'text-2' => 'Вернитесь на главную страницу и повторите попытку',
    'text-3' => 'Убедитесь, что вы ввели:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Спасибо',
    'text-1' => 'Ваш заказ уже обрабатывается!',
    'text-2' => 'Наши специалисты свяжутся с вами',
    'text-3' => 'Указанные вами данные:',
));
