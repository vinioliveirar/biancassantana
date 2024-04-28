<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $lname = $_POST['LName'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $service = $_POST['conService'];
    $message = $_POST['conMessage'];
    
    // Configurar o destinatário do email
    $to = "vinioliveirar01@gmail.com";

    // Configurar o assunto do email
    $subject = "Novo Contato";

    // Construir o corpo do email
    $email_body = "Nome: $name\n";
    $email_body .= "Sobrenome: $lname\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Telefone/WhatsApp: $phone\n";
    $email_body .= "Assunto: $service\n";
    $email_body .= "Mensagem:\n$message";

    // Enviar o email
    mail($to, $subject, $email_body);

    // Redirecionar de volta para a página do formulário
    header("Location: index.html");
} else {
    // Se o método de requisição não for POST, redirecionar para o formulário
    header("Location: index.html");
}
?>