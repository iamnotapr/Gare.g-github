<?php
    require_once 'db.php';
    $info = [];
    if ($query = $connect->query("SELECT * FROM data_base")) {             #statement: 
      $info = $query;
    } else {
        print_r($connect->errorInfo());
    };
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Gare.g</title>
    <style>
    .head-div{position: absolute;top:0;left: 0;width: 100%;height: 60px;border-bottom: 1px solid black;background-color: rgb(34, 34, 34);}
    .div-input{position: absolute;top:13px;left: 250px;height: 35px;width: 1000px;background-color: deepskyblue;border-radius: 7px;z-index: 99;}
    body{background-color: rgb(80, 80, 80);}.select-class{position: absolute;top:1.7px;left: 2px;width: 130px;height: 31px;border-radius: 5px;border: 1.5px solid deepskyblue;}
    .div-input-i{position: absolute;top:1.8px;left: 3.2px;width: 943px;height: 31px;z-index: 99;border: 1.5px solid deepskyblue;border-radius: 7px;}
    .find-btn{position: absolute;top:1.8px;right: 2px;width: 60px;height: 31px;border: 1.5px solid deepskyblue;background: white;cursor: pointer;border-radius: 7px;z-index: 99;}
    .find-btn:hover{background-color: deepskyblue;color: white;}.div-logo{position: absolute;top:10px;left: 40px;color: white;font-size: larger;}
    .video-s{position: absolute;left: 45px;color: deepskyblue;}.div-link-gare{position: absolute;top:35px;left: 40px;color: tomato;font-size: 12px;}
    .div-inc-another{position: absolute;top:60px;left: 0;width: 100%;height: 50px;background-color: rgb(121, 121, 121);z-index: 99;}
    .shop{position: absolute;top:-2px;left: 50px;color: tomato;z-index: 99;font-size: 15px;text-decoration: none;}.shop:hover{color: white;text-decoration: none;}
    .footer-nav{position: absolute;top:3700px;left: 0;width: 100%;height: 100px;background-color: rgb(34, 34, 34)}
    .support{position: absolute;top:80px;left:0;width: 100%;height: 57px;border-bottom: 1px solid white;}
    .text-sup{position: absolute;top:7px;left: 5px;color: white;}
    .div-class-film{position: absolute;top:100px;left:40px;width: 200px;height: 250px;background: grey;}
    .film-conteiner{position:absolute;left:15px;top:130px;width:1400px;height:2200px;display: grid;grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));list-style-type:none;
grid-gap: 45px;}
    .item{width:200px;height:320px;background-color: rgb(34, 34, 34);padding:10px;}
    .img-filmphp{width:180px;height:230px;}.raiting-film{z-index: 9;color:white;}
    .span-name{z-index: 9;color: white;}.hide{display:none;}
    .privacy-link{position:absolute;top:35px;left:450px;color:white}
    .text-about{position:absolute;top:0px;left:60px;color:white;width:800px}
    .support-nav{position:absolute;top:35px;left:850px;color:white;}
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
           <select class="select-class" style="display: none;">
               <option>Все категории</option>
               <option>Сериалы</option>
               <option>Аниме</option>
               <option>Боевики</option>
               <option>Комедии</option>
               <option>Триллеры</option>
           </select>
       </div>
       <div class="div-inc-another">
            <div class="text-about">
                Сайт Gare.video создан для показа фильмов на разных интернет площадках, в частности:YouTube, Netflix(не работает в данный момент на территории РФ), Amazon Prime, Кинопоиск.
            </div>
       </div>
   </div>

   <div class="support"style="display:none;">
        <div class="text-sup">
            Данный сервис, отнасительно новый. Наша команда, трудится над улучшением сервиса Gare video. Если возникнут какие-то проблемы или ошибки,
            пожалуйста, напишите на нашу почту: hello@gareg.ru
        </div>
   </div>

   <nav class="film-main">
       <div class="div-films-db">
           <div id="div-films-db-id">
                <ul class ='film-conteiner'>
                <?php foreach ($info as $data): ?>
                    <a href="filmlink.php?id=<?= $data['id_film']?>">
                        <li class="item">
                            <div class="raiting-film"><?php echo $data['raiting_film']; ?></div>
                            <div class="img-film">
                                <img src="<?php echo $data['img_film']; ?>" class="img-filmphp"/>
                            </div>
                            <div class="span-name"><?php echo $data['name_film']; ?></div>
                        </li>
                    </a>
                <?php endforeach;  ?>
                </ul>
           </div>
       </div>
   </nav>




   <div class="footer-nav">
       <div class="links">
           <a href="" class="privacy-link">Политика/конфидицеальность</a>
       </div>
       <a class="support-nav" href="https://t.me/justacryptocoin">Поддержка</a>
   </div>
    <script>
        window.onload = () => {
	        let input = document.querySelector('#find_word');

	        input.oninput = function() {
		    let value = this.value.trim();
		    let list = document.querySelectorAll('.film-conteiner li');

		    value
			    ? list.forEach(elem => {
					elem.innerText.search(value) == -1
						? elem.classList.add('hide')
						: elem.classList.remove('hide');
			    })
			    : list.forEach(elem => {
					elem.classList.remove('hide');
			     });
	        };
        };
    </script>
</body>
</html>