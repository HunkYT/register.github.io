<?php

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Проверяем, что имя не менее 3 символов
    if (strlen($name) < 3) {
        echo "Имя должно содержать не менее 3 символов.";
    }
    // Проверяем, что пароль не менее 6 символов
    elseif (strlen($password) < 6) {
        echo "Пароль должен содержать не менее 6 символов.";
    }
    // Проверяем, совпадают ли пароль и подтверждение пароля
    elseif ($password != $confirmPassword) {
        echo "Пароль и подтверждение пароля не совпадают.";
    }
    // Если все проверки прошли успешно, регистрируем пользователя
    else {
        // Здесь добавляем код для регистрации пользователя на сервере
        echo "Пользователь успешно зарегистрирован.";
    }
}
?>

<form method="post" action="">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" required><br><br>

    <label for="confirm_password">Подтверждение пароля:</label>
    <input type="password" name="confirm_password" id="confirm_password" required><br><br>

    <input type="submit" value="Зарегистрироваться">
</form>
