<?
$name  = $_POST['name'];
$phone = $_POST['phone'];
$type = $_POST['type'];

$res = mail("mail@tehnoseti29.ru", "Заявка с сайта", "Имя: ".$name."\nТелефон: ".$phone."\nХочет купить: ".$type);
if($res){echo "Заявка успешно отправлена.";} else {echo "Произошла ошибка. Попробуйте позже";}