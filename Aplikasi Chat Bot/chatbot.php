<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    
    // Respon sederhana berbasis pesan yang diterima
    $responses = [
        'hi' => 'Hello! How can I help you today?',
        'hello' => 'Hi there! What can I do for you?',
        'how are you' => 'I\'m just a bot, but I\'m doing great! How about you?',
        'bye' => 'Goodbye! Have a great day!'
    ];
    
    $message = strtolower(trim($message));
    $response = 'I\'m sorry, I don\'t understand that.';

    if (array_key_exists($message, $responses)) {
        $response = $responses[$message];
    }

    echo $response;
}
?>
<!-- $message yang ditambahkan ke session (algoritma dari chatbot ai ini) > menanggapi pesan dari pengguna ($response) -->