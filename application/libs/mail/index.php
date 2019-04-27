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
    $mail->Username = 'lienhe.dongphucvanthinh@gmail.com';                 // SMTP username
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
    $mail->setFrom($_POST['receiver_email'], 'Đồng phục');
    $mail->addAddress($_POST['receiver_email']);


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Đơn hàng đã đặt";
    $mail->Body = "<strong>Đơn hàng đã đặt của bạn bao gồm các sản phẩm sau:</strong>";
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $cart) {
        $total += $cart['item']->price * $cart['quantity'];
        $mail->Body .= "<br/><br/><hr><br/>Sản phẩm: <a target='_blank' href='". URL ."sanpham/chitiet/".$cart['item']->id."'>" . $cart['item']->name . "</a>";
        $mail->Body .= "<br/><br/>Size: " . $cart['size'];
        $mail->Body .= "<br/><br/>Số lượng: " . $cart['quantity'];
        $mail->Body .= "<br/><br/>Đơn giá: " . $cart['item']->price;
    }
    $total += 20000;
    
    $mail->Body .= "<hr><br/><strong>Chi phí vận chuyển: </strong>";
    $mail->Body .= "20000";
    $mail->Body .= "&nbsp;&nbsp;&nbsp;<strong>Tổng hóa đơn: </strong>" . $total;

    $mail->Body .= "<br/><br/><hr><br/><strong>Thông tin vận chuyển:</strong>";
    $mail->Body .= "<br/><br/>Người nhận: " . $_POST['receiver_name'];
    $mail->Body .= "<br/><br/>Số điện thoại: " . $_POST['receiver_phone'];
    $mail->Body .= "<br/><br/>Địa chỉ: " . $_POST['receiver_address'];

    $mail->send();
    // echo "<script> alert('Đặt hàng thành công!'); window.location.href = '".URL."donhang' </script>";
    
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>