<?php
// Испанский
$base_array = array(
    'name' => 'Nombre:',
    'phone' => 'Número de teléfono:',
    'return' => 'Regresar',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Gracias',
    'text-1' => '¡Gracias por su orden!',
    'text-2' => 'Nuestras expertas se pondrán en contacto contigo.',
    'text-3' => 'Asegúrate de haber ingresado:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Error',
    'text-1' => 'Se ha producido un error',
    'text-2' => 'Vuelve a la página principal e inténtalo de nuevo',
    'text-3' => 'Asegúrate de haber ingresado:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Gracias',
    'text-1' => '¡Tu pedido ya está siendo procesado!',
    'text-2' => 'Nuestras expertas se pondrán en contacto contigo.',
    'text-3' => 'Los datos que proporcionaste:',
));
