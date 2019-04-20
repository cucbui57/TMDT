<?php  
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
	require 'vendor/autoload.php';

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    $mail->CharSet = "UTF-8";
	try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mail.dongphucvanthinh@gmail.com';                 // SMTP username
    $mail->Password = 'vanthinh';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; 
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                                   // TCP port to connect to

    //Recipients
    $mail->setFrom('dongphucvanthinh@gmail.com', $_POST['fullname']);
    $mail->addAddress('dongphucvanthinh@gmail.com');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = "<strong>Liên hệ trực tiếp từ dongphucvanthinh.com</strong>";
    $mail->Body   .= "<br/><br/><strong>Họ tên người gửi: </strong>".$_POST['fullname'];
    $mail->Body   .= "<br/><br/><strong>Email người gửi: </strong>".$_POST['email'];
    $mail->Body   .= "<br/><br/><strong>Chủ đề: </strong>".$_POST['subject']; 
    $mail->Body   .= "<br/><br/><strong>Nội dung: </strong>".$_POST['message']; 

    $mail->send();
    echo "<script> alert('Thư đã gửi thành công!'); window.location.href = '".URL."lienhe' </script>";
    
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>