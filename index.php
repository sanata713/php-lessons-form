<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Простая форма обратной связи</title>

</head>

<body>

    <div class="form">
        <h1>Форма обратной связи</h1>


        <form action="index.php" method="post">
            <label class="label" for="userName">Имя пользователя:</label>
            <input class="input" type="text" name="userName" placeholder="Ваше имя" required>

            <label class="label" for="userEmail">Адрес электронной почты:</label>
            <input class="input" type="email" name="userEmail" placeholder="Ваш Email" required>

            <label class="label" for="message">Ваше сообщение:</label>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Текст сообщения" required></textarea>
            <input class="button" type="submit" value="Отправить форму!">

            <?php  
            if ( !empty($_POST) ) {
                $message = "Вам пришло новое сообщение с сайта: \n"
                . "Имя отправителя: " . $_POST['userName'] . "\n"
                . "Email отправителя: " . $_POST['userEmail'] . "\n"
                . "Сообщение: \n" . $_POST['message'];

                $headers = "From: info@testrun.ru";

                $resultMail = mail("nata_san@bk.ru", "Сообщение с сайта", $message, $headers);


                if ( $resultMail ) {
                    echo "<p class='msg'>Сообщение успешно отправлено</p>";
                } else {
                    echo "<p class='msg'>Что-то пошло не так. Письмо не отправлено</p>";
                }
            }
            ?>

        </form>
    </div>

</body>

</html>
