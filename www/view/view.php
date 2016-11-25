<!DOCTYPE html>
<html>
<head>
    <title>
        Pagina principala
    </title>
</head>
<body>
<h1>Noutati</h1>
<?php
function showAllNews($news)
{   //var_dump($news);
    echo "<br>";

    foreach ($news as $k => $it) {
      //  foreach ($news[$k] as $q => $item) {
       //     echo $q . "=> " . $item . "<br>";


            ?>
            <article>
                <img src="img/<?= $it['img']; ?>">
                <h2 class="title"><?=$it['title']    ?></h2>
                <p class="text"><?=$it['text'] ?></p>
            </article>
            <?php
       //// }
    }
    echo "<a href='view/form.php'>Posteaza o stire </a>";
}

?>
</body>
</html>
