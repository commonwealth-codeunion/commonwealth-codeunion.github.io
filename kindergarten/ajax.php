<?include $_SERVER['DOCUMENT_ROOT'].'/scripts/phpmailer/PHPMailer.php';
include $_SERVER['DOCUMENT_ROOT'].'/scripts/phpmailer/SMTP.php';
include $_SERVER['DOCUMENT_ROOT'].'/scripts/phpmailer/Exception.php';
if($_POST['mail']==true){
$email=$_POST['mail'];
}else{
$email='Отправитель';
};
if($_POST['name']==true){
$name=$_POST['name'];
}else{
$name='Отправитель';
};
if($_POST['phone']==true){
$phone=$_POST['phone'];
}else{
$phone='Телефон';
};
if($_POST['msg']==true){
$message=$_POST['msg'];
}else{
$message='Сообщение';
};
$mail=new PHPMailer\PHPMailer\PHPMailer(true);
$msg="ok";
$mail->isSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPAuth=false;
$mail->SMTPAutoTLS=false;
$mail->Host='localhost';
$mail->Port=25;
$mail->setFrom('Form@spreliance.kz','Reliance');
$mail->addAddress('denis.yazovskiy@mail.ru');
$mail->isHTML(true);
$mail->Subject='Новая заявка!';
$mail->Body='<html><body>';
$mail->Body.='<h1>Новая заявка на ПКО!</h1><br>';
$mail->Body.='<table rules="all" style="border-color: #666; max-width: 200px;" cellpadding="10">';
$mail->Body.="<tr style='background: #eee;'><td>
                        <strong>Имя:</strong>
                        </td><td>".strip_tags($name)."</td></tr>";
$mail->Body.="<tr><td>
                        <strong>Почта:</strong>
                        </td><td>".strip_tags($email)."</td></tr>";
$mail->Body.="<tr><td>
                        <strong>Телефон:</strong>
                        </td><td>".strip_tags($phone)."</td></tr>";
$mail->Body.="<tr><td>
                        <strong>Сообщение:</strong>
                        </td><td>".strip_tags($message)."</td></tr>";
$mail->Body.="</table>";
$mail->Body.="</body></html>";
if($mail->send()){echo "Заявка успешно отправлена, в ближайшее время с вами свяжутся наши специалисты.";}
else{echo 'Произошла ошибка, попробуйте позже.';}
?>
