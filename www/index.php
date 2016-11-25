<?php
/*

4. Используя изученную концепцию MVC создайте сайт - новостную ленту
5. Список страниц:
5.1 Главная страница со всеми новостями, отсортированными по дате в обратном порядке и ссылками на каждую новость
5.2. Страница конкретной новости
5.3. Форма добавления новости на сайт
M
V
C
*/
require_once __DIR__ . "/model/model.php";
connectDb();
$news = getAllNews();

if (isset ($_POST['title'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $date = $_POST['date'];

    $newName =  basename($_FILES['img']['name']);
    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['img']['tmp_name'], $newName);
    }
    $img = $newName;
    addNewsInDb($title,$text,$date,$img);
    header("Location: index.php");
    exit;
}

include_once "view/view.php";
showAllNews($news);

//header("Location: view/view.php");
//exit;