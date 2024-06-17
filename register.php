<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);

   
    $errors = [];

    // Перевірка імені користувача
    if (empty($username)) {
        $errors[] = "Ім'я користувача є обов'язковим.";
    } elseif (strlen($username) < 3 || strlen($username) > 20) {
        $errors[] = "Ім'я користувача має містити від 3 до 20 символів.";
    }

    // Перевірка електронної пошти
    if (empty($email)) {
        $errors[] = "Електронна пошта є обов'язковою.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Невірний формат електронної пошти.";
    }

    // Перевірка паролю
    if (empty($password)) {
        $errors[] = "Пароль є обов'язковим.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Пароль має містити принаймні 6 символів.";
    }

    // Перевірка підтвердження паролю
    if (empty($confirm_password)) {
        $errors[] = "Підтвердження паролю є обов'язковим.";
    } elseif ($password !== $confirm_password) {
        $errors[] = "Паролі не співпадають.";
    }

    // Вивід результату перевірки
    if (empty($errors)) {
        echo "Реєстрація пройшла успішно!";
        
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
