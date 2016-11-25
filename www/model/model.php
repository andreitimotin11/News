<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 02.11.2016
 * Time: 23:03
 *
 */

function connectDb(){
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "GeekB_News";
    $res = mysql_connect($server, $user, $pass);
    mysql_select_db($db);

}
function getAllNews(){
   // $sql = "SELECT * FROM news";
    $res = mysql_query("SELECT * FROM news") or die("Error la query");
    while ($news1 = mysql_fetch_assoc($res)){
        $news[] = $news1;
    }
    return $news;
}
function addNewsInDb($title,$text,$date,$img){
    $sql = "INSERT INTO News (title, text, date, img)
            VALUES ('$title','$text','$date','$img')";
    $res = mysql_query($sql);
}
