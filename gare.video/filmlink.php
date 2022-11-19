<?php
    require_once 'db.php';
    
    $movie_id = $_GET['id'];
    $movie = mysqli_query($connect, query:"SELECT * FROM data_base WHERE `id_film` = '$movie_id'");
    $movie = mysqli_fetch_assoc($movie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://github.com/iamnotapr/pictures/blob/main/gare.png?raw=true" />
    <title><?= $movie['name_film'] ?></title>
    <style>
        .head-div{position: fixed;top:0;left: 0;width: 100%;height: 60px;border-bottom: 1px solid black;background-color: rgb(34, 34, 34);}
    .div-input{position: absolute;top:13px;left: 250px;height: 35px;width: 1000px;background-color: deepskyblue;border-radius: 7px;z-index: 99;}
    body{background-color: rgb(80, 80, 80);}.select-class{position: absolute;top:1.7px;left: 2px;width: 130px;height: 31px;border-radius: 5px;border: 1.5px solid deepskyblue;}
    .div-input-i{position: absolute;top:1.8px;left: 3.2px;width: 943px;height: 31px;z-index: 99;border: 1.5px solid deepskyblue;border-radius: 7px;}
    .find-btn{position: absolute;top:1.8px;right: 2px;width: 60px;height: 31px;border: 1.5px solid deepskyblue;background: white;cursor: pointer;border-radius: 7px;z-index: 99;}
    .find-btn:hover{background-color: deepskyblue;color: white;}.div-logo{position: absolute;top:10px;left: 40px;color: white;font-size: larger;}
    .div-link-gare{position: absolute;top:35px;left: 40px;color: tomato;font-size: 12px;}
    .div-inc-another{position: absolute;top:60px;left: 0;width: 100%;height: 50px;background-color: rgb(121, 121, 121);z-index: 99;}
    .text-about{position:absolute;top:0px;left:60px;color:white;width:800px}
    .div-mainBody{position:absolute;top:120px;left:150px;}.imgmovie{position:absolute;width:400;height:380px}
    .div-imgFilm{position:absolute;top:45px;left:50px;border-radius:10px;}
    .div-titleFilm{position:absolute;left:350px;top:40px;color:white;width:800px;height:30px}
    .div-raitingWord{position:absolute;top:100px;color:white;left:350px;font-size:20px;width:200px;height:10px;}
    .div-span-number{position:absolute;top:102px;left:520px;font-size:20px;height:30px;width:80px;background-color:deepskyblue;border-radius:15px;text-align:center;color:white;}
    </style>
</head>
<body>
<div class="head-div">
        <div class="div-logo">Gare
            <span class="video-s">video</span>
        </div>
        <div class="div-link-gare">
            Gare.g филлиал
        </div>
        <div class="div-input">
            <form>
                 <input class="div-input-i" type="search" id="find_word">
                 <button type="submit" class="find-btn">GO</button>
            </form>
        </div>
        <div class="div-inc-another">
             <div class="text-about">
                 Сайт Gare.video создан для показа фильмов на разных интернет площадках, в частности:YouTube, Netflix(не работает в данный момент на территории РФ), Amazon Prime, Кинопоиск.
             </div>
        </div>
    </div>
    <main>
        <div class="div-mainBody">
        
            <div class="title-movie"></div>
            <div class="raiting-div">
                <div class="div-raitingWord">
                    Рейтинг фильма
                </div>
                <div class="div-span-number">
                <?= $movie['raiting_film'] ?>           <!--рейтинг-->
                </div>
            </div>
            <h1 class="div-titleFilm">
            <?= $movie['name_film'] ?>                      <!--Название-->
            </h1>
            <div class="div-imgFilm">
                <img src="<?= $movie['img_film'] ?>" class="imgmovie"></img>   <!--Фото фильма-->
            </div>
         
        </div>
</body>
</html>