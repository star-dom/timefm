<?php
if (isset($_GET['artist']) && isset($_GET['title'])) {
    // Получаем данные из URL
    $artist = htmlspecialchars(trim($_GET['artist']));
    $title = htmlspecialchars(trim($_GET['title']));

    // Обработка данных (например, можно соединить их в одну строку)
    $message = "Исполнитель: $artist, Название: $title";

    // Сохранение данных в сессию или передача через URL
    session_start();
    $_SESSION['message'] = $message;

    // Перенаправление на index.html
    header("Location: index.html");
    exit();
} else {
    echo "Данные не были переданы.";
}
?>
