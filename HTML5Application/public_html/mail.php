<?php


$to = "gaslanyan@gmail.com";

$error = 0;
if (empty($_POST['name'])){
    $error = 1;
}

if (empty($_POST['message'])){
    $error = 2;
}

if (empty($_POST['message']) or !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST['email'])){
    $error = 3;
}

if ($error == 0) {
    $subject = "pagfinehomes.com: message from " . strip_tags(htmlentities($_POST['name']));
    $message = strip_tags(htmlentities($_POST['message']));

    $email = $_POST['email'];
    $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    header('Location: /contact.php?email_sent=1');
}
else {
    header('Location: /contact.php?error='.$error);
}
