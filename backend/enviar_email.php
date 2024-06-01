<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
        $to = 'yagohenriquebr@gmail.com'; 
        $subject = 'Formulário de Contato';
        $body = "Nome: $name\nEmail: $email\nMensagem:\n$message";

        
        if (mail($to, $subject, $body)) {
            echo 'Email enviado com sucesso!';
        } else {
            echo 'Ocorreu um erro ao enviar o email.';
        }
    } else {
        echo 'Por favor, preencha todos os campos do formulário.';
    }
} else {
    
    header("Location: index.html");
    exit;
}
