<?php
$db_host = "localhost"; // сервер
$db_user = "root"; // имя пользователя
$db_pass = "14708642"; // пароль
$db_name = "library"; // название базы данных

// выполнение подключения
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Если кнопка нажата, то выполняет тело условия
if (isset($_POST['done'])) {
    $_POST['done'] = false;
    if (!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['2name']) && !empty($_POST['data']) && !empty($_POST['cont']) && !empty($_POST['address'])) {
        $s1=$db->real_escape_string($_POST['surname']);
        $s2=$db->real_escape_string($_POST['name']);
        $s3=$db->real_escape_string($_POST['2name']);
        $s4=$db->real_escape_string($_POST['data']);
        $s5=$db->real_escape_string($_POST['cont']);
        $s6=$db->real_escape_string($_POST['address']);
        $sql1 = "INSERT INTO users (surname, name, patronymic, birthday, number, address, rating) VALUES ('$s1', '$s2', '$s3', '$s4', $s5, '$s6', 0);";
        //$massage = $_POST['surname'] .  " $s2, $s3, $s4, $s5, $s6";
        //$massage = "$sql1";
        
        $result = mysqli_query($db, $sql1);
        if ($result = true) {
            $massage = "Пользователь зарегестрирован";
        }
        else {
            $massage = "Ошибка";
        }
        
    }
    else {
        $massage = "Вы должны заполнить все поля";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
	<link rel="stylesheet" href="sign.css">
	<script src="sign.js"></script>
<body style="background-color: #CDC9FF;">
	<div class="login-container">
		<h1 class="pypy">Регистрация</h1>
        <form action="" method="post" id="login-form" class='login-form1'>
            <div class="form-group">
                <label for="surname">Фамилия</label>
                <input type="text" id="surname" name="surname" class="pole">
            </div>
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name"class="pole">
            </div>
            <div class="form-group">
                <label for="2name">Отчество</label>
                <input type="text" id="2name" name="2name"class="pole">
            </div>
            <br>
            <span class='KristinaMolodec'>
            <div class="form-group">
                <label for="data">Дата рождения</label>
                <input type="text" id="data" name="data"class="pole">
            </div>
            <div class="form-group">
                <label for="cont">Контактные данные</label>
                <input type="text" id="cont" name="cont"class="pole">
            </div>
            <div class="form-group">
                <label for="address">Адрес</label>
                <input type="text" id="address" name="address"class="pole">
            </div>
            </span>
        
            <input type="submit" name="done" class="btn" value="Зарегистрировать" onclick="DimaSamiyKrytoi(this)"></input>
            <p id='reg'></p>
        </form>
        <p id='phpMes' class='phpMes' style="display: none;"><?php echo $massage ?></p>
    </div>
    <div class="wrapper-img">
        <a href="home.html"><img src="https://i.ibb.co/QdBP5wQ/Property-1-Defaulthome.png" alt="home" class="bb"></a>
        <a href="home.html"><img src="https://i.ibb.co/Dff9wgJ/Property-1-Variant2homehover.png" alt="homehover" class="bb-hide"></a>
    </div>
</body>
</html>
