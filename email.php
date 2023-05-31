<?php

$to = "erenyamic2@gmail.com";
$subject = "Test E-postası";
$message = "Bu bir test e-postasıdır.";
$headers = "From: gonderen@example.com\r\n";
$headers .= "Reply-To: gonderen@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "E-posta başarıyla gönderildi.";
} else {
    echo "E-posta gönderimi başarısız oldu.";
}

?>