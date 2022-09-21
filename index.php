<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Бактерии</title>
</head>
<body>
    <main>
        <section class="main">
            <div class="container">
                <form action="" method="post" class="main-form">
                    <input type="text" name="name" class="main-form" placeholder="Имя">
                    <input type="tel" name="tel" class="main-form" placeholder="Телефон">
                    <input type="email" name="email" class="main-form" placeholder="E-mail">
                    <input type="text" name="count" class="main-form" placeholder="Количество тактов">
                    <input type="submit">
                </form>
            </div>
        </section>
    </main>
</body>
</html>

<?php


function validateName()
{
    $name = $_POST['name'];
    if (!preg_match('#[-_]|\W|\d#u', $name))
    {
        return true;
    } else {
       echo "Имя должно состоять только из букв";
    }
}

function validateTel()
{
    $tel = $_POST['tel'];
    if (preg_match('#^(\+375|80)[\- ]?(29|25|44|33)[\- ]?(\d{3})[\- ]?(\d{2})[\- ]?(\d{2})$#', $tel))
    {
       return true;
    } else {
        echo "Проверьте введенный номер телефона";
    }
}

if (validateName() && validateTel()) {
    $count = $_POST['count'];
    if (!empty($count)) {
        $green = 1;
        $red = 1;
        for ($i = 1; $i <= $count; $i++) {
            $result_green1 = 3 * $green;
            $result_green2 = 7 * $red;
            $result_green = $result_green1 + $result_green2;
            $result_red1 = 4 * $green;
            $result_red2 = 5 * $red;
            $result_red = $result_red1 + $result_red2;
            $green = $result_green;
            $red = $result_red;
        }
        echo "Количество зеленых бактерий: $green <br> 
              Количество красных бактерий: $red <br>";
    } else {
        echo "Количество зеленых бактерий: 1 <br> 
              Количество красных бактерий: 1 <br>";
    }
}

?>