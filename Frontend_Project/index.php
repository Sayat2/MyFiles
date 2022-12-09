<?php
@include 'config.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Киномонстр Саят- это портал о кино!">
    <meta name="keywords" content="фильмы, фильмы онлайн, hd, Azhen Sayat" />
    <link rel="stylesheet" href="assets/css/style.css"> 
    <title>KinoMonster Sayat</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="logo">
                <div class="logo_text">
                    <h1><a href="https://www.netflix.com/browse">KinoMonster Sayat</a></h1>
                    <h2>you can watch the best movies only with KinoMonster Sayat📽️🤩</h2>
                </div>
            </div>

            <div class="menubar">

                <ul class="menu">
                    <li class="selected"><a href="index.php">Главная</a></li>
                    <li><a href="films.php">Фильмы</a></li>
                    <li><a href="#">Сериалы</a></li>
                    <li><a href="rating.php">Рейтинг фильмов</a></li>
                    <li><a href="contact.php">Контакты</a></li> 
                </ul>
            </div>
        </div>

        <div class="site_content">

            <div class="sidebar_container">

                <div class="sidebar">

                    <h2>Поиск</h2>
                    <form method="post" action="#" id="search_form">
                        <input type="search" name="search_field" placeholder="ваш запрос" />
                        <input type="submit" class="btn" value="найти" />
                    </form>
                </div>

                <div class="sidebar">
                    <h2>Вход</h2>
                    <form method="post" action="#" id="login">

                        <input type="text" name="login_field" placeholder="логин" />
                        <input type="password" name="password_field" placeholder="пароль" />
                        <input type="submit" class="btn" value="вход" />

                        <div class="lables_passreg_text">
                            <span><a href="#">забыли пароль?</a></span> | <span><a href="#">регистрация</a></span>                         
                        </div>
                    </form>
                </div>

                <div class="sidebar">
                    <h2>Новости</h2>
                    <span>11.09.2022</span>
                    <p>Мы запустили расширенный поиск</p>
                    <a href="#">читать</a>
                </div>

                <div class="sidebar">
                    <h2>Рейтинг фильмов</h2>
                    <ul>
                        <li><a href="show.html">Интерстеллер</a><span class="rating_sidebar">8.1</span></li>
                        <li><a href="#">Матрица</a><span class="rating_sidebar">8.0</span></li>
                        <li><a href="#">Безумный макс</a><span class="rating_sidebar">7.5</span></li>
                        <li><a href="#">Облачный атлас</a><span class="rating_sidebar">7.4</span></li>
                    </ul>
                </div>
            </div>

            <div class="content">

                <h1>Новые фильмы</h1>

                <div class="films_block">

                    <a href="#"><img src="assets/img/matrix.png"></a>
                    <a href="#"><img src="assets/img/max.png"></a>
                    <a href="#"><img src="assets/img/inter.png"></a>
                    <a href="#"><img src="assets/img/cloud.png"></a>
                </div>

                <h1>Новые сериалы</h1>

                <div class="films_block">

                    <a href="#"><img src="assets/img/dead.png"></a>
                    <a href="#"><img src="assets/img/silicon.png"></a>
                    <a href="#"><img src="assets/img/breakingbad.png"></a>
                    <a href="#"><img src="assets/img/xfiles.png"></a>
                </div>


                <div class="posts">
                    <hr>
                    <h2><a href="#">Как снимали Интерстеллар</a></h2>
                    <div class="posts_content">
                        <p>
                            45 лет исполнилось Кристоферу Нолану - одному из самых успешных режиссеров нашего времени, чьи работы одиноково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималось студия Paramount. Когда Кристофер Нолан занял место режиссера, студия Warner Bros., которая выпускала его последие фильмы, добилась участия в проекте.
                        </p>
                    </div>
                    
                   <p><a href="#">читать</a></p>

                   <hr>
                    <h2><a href="#">Актер Том Хенкс поделился впечатлением о фестивале</a></h2>
                    <div class="posts_content">
                        <p>
                            16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.
                        </p>
                    </div>
                    
                   <p><a href="#">читать</a></p>
                </div>

            </div>
        </div>


        <div class="footer">
            <p>
                <a href="#">Главная</a> | 
                <a href="films.php">Фильмы</a> | 
                <a href="#">Сериалы</a> | 
                <a href="rating.php">Рейтинг фильмов</a> |
                <a href="contact.php">Контакты</a>
            </p>
            <p>ABS SDU Sdudents</p>

        </div>
    </div>
    
</body>
</html>