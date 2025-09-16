<?php
// Французский
$base_array = array(
    'name' => 'Nom:',
    'phone' => 'Numéro de téléphone:',
    'return' => 'Rendre',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Merci',
    'text-1' => 'Votre commande est déjà en cours de traitement !',
    'text-2' => 'Nos experts vous contacteront',
    'text-3' => "Les données que vous avez fournies :",
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Erreur',
    'text-1' => 'Une erreur est survenue',
    'text-2' => 'Revenez à la page principale et réessayez',
    'text-3' => "Assurez-vous d'avoir saisi :",
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Merci',
    'text-1' => 'Nous vous remercions de votre commande!',
    'text-2' => 'Nos experts vous contacteront',
    'text-3' => "Assurez-vous d'avoir saisi :",
));
