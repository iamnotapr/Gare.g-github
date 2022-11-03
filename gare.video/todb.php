<?php
    require_once 'db.php';

    $name = $_POST['nameFilm'];
    $imgFilm = $_POST['imgFilm'];
    $raitingFilm = $_POST['raitingFilm'];
    $youtubyLink = $_POST['youtubyLink'];
    $amazonLink = $_POST['amazonLink'];
    $netflixLink = $_POST['netflixLink'];
    $yandexLink = $_POST['yandexLink'];
    mysqli_query($connect, "INSERT INTO `data_base` (`id_film`, `name_film`, `img_film`, `raiting_film`, `youtube_link`, `amazon_link`, `netflix_link`, `yandexTV_link`) VALUES (NULL, '$name', '$imgFilm', '$raitingFilm', '$youtubyLink', '$amazonLink', '$netflixLink', '$yandexLink')");
    header('Location: admin.html');