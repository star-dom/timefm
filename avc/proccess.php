<?php
// Проверяем, переданы ли параметры artist и title
if (isset($_GET['artist']) && isset($_GET['title'])) {
    // Получаем значения параметров
    $artist = htmlspecialchars($_GET['artist']);
    $title = htmlspecialchars($_GET['title']);
    
    // Здесь можно добавить обработку данных, если необходимо

    // Отправляем данные на index.html через AJAX (например, сохраняем в сессии)
    session_start();
    $_SESSION['artist'] = $artist;
    $_SESSION['title'] = $title;

    // Выводим сообщение "OK"
    echo "OK";
} else {
    // Если параметры не переданы, выводим сообщение об ошибке
    echo "Ошибка: параметры artist и title не переданы.";
}
?>
