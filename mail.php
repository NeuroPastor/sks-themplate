<?
$name  = $_POST['name'];
$phone = $_POST['phone'];

$res = mail("mail@tehnoseti29.ru", "Заявка с сайта", "Имя: ".$name."\nТелефон: ".$phone);
if($res){echo "Заявка успешно отправлена.";} else {echo "Произошла ошибка. Попробуйте позже";}