<?php
// Английский
$base_array = array(
    'name' => 'Name:',
    'phone' => 'Phone number:',
    'return' => 'To return',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Thanks',
    'text-1' => 'Thank you for your order!',
    'text-2' => 'Our experts will contact you',
    'text-3' => 'Make sure you have entered:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Error',
    'text-1' => 'An error has occurred',
    'text-2' => 'Go back to the main page and try again',
    'text-3' => 'Make sure you have entered:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Thanks',
    'text-1' => 'Your order is already being processed!',
    'text-2' => 'Our experts will contact you',
    'text-3' => 'The data you provided:',
));
