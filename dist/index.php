<?php session_start();

if(!$_SESSION['lang']){
    require('lang/ru.php');
}else{
    require('lang/'.$_SESSION['lang'].'.php');
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/style.min.css">
    <title>NoorSoft</title>
</head>

<body>
    <div class="burger-wrapper">
        <div class="burger__menu">
            <div id="wrapper" class="wrapper"><span></span> <span></span> <span></span></div>
        </div>
    </div>
    <div id="tuch" class="tuch">
        <div class="tuch-wrapper"><a href="#" class="tuch__puncts">О НАС</a> <a href="#" class="tuch__puncts">УСЛУГИ</a> <a href="#" class="tuch__puncts">ПОРТФОЛИО</a> <a href="#" class="tuch__puncts">БЛОГ</a> <a href="#" class="tuch__puncts">КАРЬЕРА</a> <a href="#" class="tuch__puncts">КОНТАКТЫ</a></div>
    </div>
    <header class="promo">
        <div class="container">
            <nav class="promo__navigation"><img src="img/icon/logo.png" alt="Logo" class="promo__logo">
                <ul class="promo__menu">
                    <li class="promo__puncts"><? echo $lang['d1']; ?></li>
                    <li class="promo__puncts"><? echo $lang['d2']; ?></li>
                    <li class="promo__puncts"><? echo $lang['d3']; ?></li>
                    <li class="promo__puncts"><? echo $lang['d4']; ?></li>
                    <li class="promo__puncts"><? echo $lang['d5']; ?></li>
                    <li class="promo__puncts"><? echo $lang['d6']; ?></li>
                </ul>
                <div class="promo__button_block"><a href="lang.php?lang=ru"><button id="promo__button-ru" class="promo__button ">RU</button>
                </a><a href="lang.php?lang=en"> <button id="promo__button-eng" class="promo__button ">ENG</button></a></div>
            </nav>
            <div class="promo__wrapper">
                <div class="promo__text">
                    <h1 class="promo__title">Webstus Publisher</h1>
                    <div class="promo__subtitle">──<span><? echo $lang['d7']; ?></span></div>
                    <div class="promo__descr"><? echo $lang['d8']; ?></div>
                </div>
                <div class="promo__img hidden"></div>
            </div>
        </div>
    </header>
    <section class="task">
        <div class="container">
            <div class="task__border">
                <h2 class="task__title"><? echo $lang['d9']; ?></h2>
                <div class="task__text">
                    <div class="task__subtitle"><? echo $lang['d10']; ?></div>
                    <div class="task__descr"><? echo $lang['d11']; ?><br><br><? echo $lang['d12']; ?></div>
                </div>
                <div class="task__text">
                    <div class="task__subtitle"><? echo $lang['d13']; ?></div>
                    <div class="task__descr"><? echo $lang['d14']; ?><br><br><? echo $lang['d15']; ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="study">
        <div class="container">
            <div class="study__anc">
                <div class="study__information">
                    <div class="study__img hidden-lup"><img src="img/icon/Lupa.png" alt="StudyIcon"></div>
                    <div class="study__text"><? echo $lang['d16'] ?></h2>
                        <div class="study__descr"><? echo $lang['d17'] ?></div>
                    </div>
                </div>
                <div class="study__border">
                    <div class="study__text-border">
                        <div class="study__subtitle-border"><? echo $lang['d18'] ?></div>
                        <div class="study__descr-border"><? echo $lang['d19'] ?></div>
                    </div>
                    <div class="study__wrapper">
                        <div class="study__blocks">
                            <div class="study__block">
                                <div class="study__number">1</div>
                                <div class="study__description"><? echo $lang['d20'] ?></div>
                            </div>
                            <div class="study__block">
                                <div class="study__number">2</div>
                                <div class="study__description"><? echo $lang['d21'] ?></div>
                            </div>
                            <div class="study__block">
                                <div class="study__number">3</div>
                                <div class="study__description"><? echo $lang['d22'] ?></div>
                            </div>
                            <div class="study__block study__block-hidden">
                                <div class="study__number">4</div>
                                <div class="study__description"><? echo $lang['d23'] ?></div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="study__blocks">
                            <div class="study__block">
                                <div class="study__number">5</div>
                                <div class="study__description"><? echo $lang['d24'] ?></div>
                            </div>
                            <div class="study__block">
                                <div class="study__number">6</div>
                                <div class="study__description"><? echo $lang['d25'] ?></div>
                            </div>
                            <div class="study__block study__block-hidden">
                                <div class="study__number">7</div>
                                <div class="study__description"><? echo $lang['d26'] ?></div>
                            </div>
                            <div class="study__block study__block-comment">
                                <div class="study__description study__description-special"><? echo $lang['d27'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="study__project"><img src="img/Windows.png" alt="" class="study__project-img"></div>
    <section class="decision">
        <div class="container">
            <div class="decision__parsing">
                <h2 class="parsing-title"><? echo $lang['d28'] ?></h2><? echo $lang['d29'] ?><br><br><? echo $lang['d30'] ?>
            </div>
            <div class="decision__wrapper">
                <div class="decision__block">
                    <div class="decision__subtitle"><? echo $lang['d31'] ?></div>
                    <div class="decision__descr"><? echo $lang['d32'] ?><br><br><? echo $lang['d33'] ?></div>
                </div>
                <hr>
                <div class="decision__block">
                    <div class="decision__subtitle"><? echo $lang['d33'] ?></div>
                    <div class="decision__descr"><? echo $lang['d34'] ?><br><br><? echo $lang['d35'] ?></div>
                </div>
                <hr>
                <div class="decision__block">
                    <div class="decision__subtitle"><? echo $lang['d35'] ?></div>
                    <div class="decision__descr"><? echo $lang['d36'] ?></div>
                </div><img src="img/liner.png" alt="Liner" class="decision__liner hidden-img"> <img src="img/advantages.png" alt="Advantages Img" class="decision__advantages hidden-img">
            </div>
        </div>
    </section>
    <section class="total">
        <div class="container">
            <div class="total__text">
                <h2 class="total__subtitle"><? echo $lang['d37'] ?></h2>
                <div class="total__descr"><? echo $lang['d38'] ?><br><br><? echo $lang['d39'] ?></div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <h2 class="reviews__title"><? echo $lang['d40'] ?></h2>
            <div class="reviews__block-1"><img src="img/human/AnisimovaOlgaImg.png" alt="AnsimovaOlga Images" class="reviews__img">
                <div class="reviews__descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
            </div>
            <div class="reviews__block-2" style="display: none;"><img src="img/human/Ivan.png" alt="Ivan Images" class="reviews__img">
                <div class="reviews__descr">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.</div>
            </div>
            <div class="reviews__counter">
                <div id="namer" class="reviews__subtitle">Reaza Piri - CEO and co-founder</div>
                <div class="reviews__arrows"><img id="leftarrow" src="img/Arrows/Left.png" alt="Left Arrows"> <span id="one">1</span>/<span>2</span> <img id="rightarrow" src="img/Arrows/Right.png" alt="Right Arrows"></div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container"><span class="noorsoft">© NoorSoft All rights reserved</span> <span class="privacy">Privacy Policy</span></div>
    </footer>
    <script src="js/jQueryCompressed.js"></script>
    <script src="js/script.js"></script>
</body>

</html>