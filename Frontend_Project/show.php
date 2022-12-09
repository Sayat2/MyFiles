<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Киномонстр Саят- это портал о кино!">
    <meta name="keywords" content="фильмы, фильмы онлайн, hd, Azhen Sayat" />
    <link rel="stylesheet" href="assets/css/style.css"> 
    <title>Intersteller - KinoMonster Sayat</title>
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
                <h1>Интерстеллар</h1>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/m2vijtILDuk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <div class="info_film_page">
                    <span class="label">Рейтинг: </span><span class="value">8.1 / 10</span>
                    <span class="label">год: </span><span class="value">2014</span>
                    <span class="label">Режиссер: </span><span class="value">Кристофер Нолан</span>
                </div>

                <hr>

                <h2>Описание Интерстеллар</h2>
                <div class="descriptions_film">
                    <img src="assets/img/inter.png" alt="intersteller">
                    Когда засуха приводит человечество к продовольственному кризису, коллектив исследователей и учёных отправляется сквозь червоточину (которая предположительно соединяет области пространства-времени через большое расстояние) в путешествие, чтобы превзойти прежние ограничения для космических путешествий человека и переселить человечество на другую планету.
                </div>

                <hr>
                <h2>Отзывы об Интерстеллар</h2>

                <div class="reviews">
                    <div class="review_name">
                        Сергей
                    </div>
                    <div class="review_text">
                        Отличный фильм, 3 часа пролетели незаметно. 
                    </div>
                </div>

                <div class="reviews">
                    <div class="review_name">
                        Дмитрий
                    </div>
                    <div class="review_text">
                        После фильма начало, я с не терпением ждал еще работ от Кристофера Нолана. <br> Интерстеллар меня впечатлил.
                    </div>
                </div>

                <div class="send">
                    <form method="post" action="#" id="review">
                        <input type="text" name="review_name" placeholder="ваше имя">
                        <textarea name="review_text"></textarea>
                        <input type="submit" value="отправить">
                    </form>
                </div>

            </div>
        </div>


        <div class="footer">
            <p>
                <a href="index.php">Главная</a> | 
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