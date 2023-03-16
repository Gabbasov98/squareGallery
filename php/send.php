<?php
$to = 'sedsaf@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
$subject = 'Обратный звонок'; //Заголовок сообщения
$message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>'.$_POST['name'].'</p>
                        <p>'.$_POST['email'].'</p>
                        <p>'.$_POST['phone'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
$headers .= "From: ROCKIT <info@squaregallery.com>\r\n"; //Наименование и почта отправителя
if (!empty($_POST['phone']) && $_POST['phone'] != '' && strlen($_POST['phone']) > 16 && strlen($_POST['phone']) < 19){
mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}

?>
