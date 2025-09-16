<?php
// Португальский
$base_array = array(
    'name' => 'Nome:',
    'phone' => 'Número de telefone:',
    'return' => 'Retornar',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Obrigado',
    'text-1' => 'Obrigado pelo seu pedido!',
    'text-2' => 'Nossos especialistas entrarão em contato com você',
    'text-3' => 'Certifique-se de inserir:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Erro',
    'text-1' => 'Ocorreu um erro',
    'text-2' => 'Volte para a página principal e tente novamente',
    'text-3' => 'Certifique-se de inserir:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Obrigado',
    'text-1' => 'Seu pedido já está sendo processado!',
    'text-2' => 'Nossos especialistas entrarão em contato com você',
    'text-3' => 'Os dados que você forneceu:',
));
