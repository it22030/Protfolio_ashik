<?php
include('smtp/PHPMailerAutoload.php');

$html = "Test message from portfolio";

echo smtp_mailer('mdashikullaha@gmail.com', 'Portfolio Contact', $html);

function smtp_mailer($to, $subject, $msg) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    
    $mail->Username = 'mdashikullaha@gmail.com';
    $mail->Password = 'pdqigveknchajeso'; // Gmail App Password
    $mail->SMTPSecure = 'tls';

    $mail->setFrom('mdashikullaha@gmail.com', 'Portfolio Contact');
    $mail->addAddress($to);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $msg;

    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];

    if (!$mail->send()) {
        return "Mailer Error: " . $mail->ErrorInfo;
    } else {
        return "Message has been sent successfully ✔";
    }
}
?>
 
