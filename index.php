<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>原田建築株式会社</title>
</head>
<body>
    <header>
        <div class="header__inner">
            <h3 class="block-header">
                <a href="./index.html">
                    HARADA Construction
                </a>
            </h3>
            <div id="" class="header__navgroup">
                <div class="header__navitem">
                    <a href="#Concept">Concept</a>
                </div>
                <div class="header__navitem">
                    <a href="#Works">Works</a>
                </div>
                <div class="header__navitem">
                    <a href="#Location">Location</a>
                </div>
                <div class="header__navitem header__contact">
                    <i class="fas fa-file-signature"></i>
                    Contact
                    <a class="a__btn" href="#"></a>
                </div>
                <div class="hamburger__btn"></div>
            </div>
            <div id="nav" class="header__navgroup_sp">
                <div class="header__navitem_sp">
                    <a href="#">Concept</a>
                </div>
                <div class="header__navitem_sp">
                    <a href="#">Works</a>
                </div>
                <div class="header__navitem_sp">
                    <a href="#">Location</a>
                </div>
                <div class="header__navitem_sp header__contact">
                    <i class="fas fa-file-signature"></i>
                    Contact
                    <a class="a__btn" href="#"></a>
                </div>
                <div class="hamburger__btn_sp"></div>
            </div>
            <div id="hamburger__modal" class="hamburger__modal"></div>
            <div id="hamburger__btn" class="hamburger__btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script>
            var lastInnerWidth = document.documentElement.clientWidth; //window.innerWidthで現在の画面幅を取得
            var nav = document.getElementById('nav');
            if (lastInnerWidth <= 520) { // 画面幅550px以下の場合
                nav.classList.add('hamburger'); // クラス「hamburger」を追加
            }

            window.addEventListener("resize" , function () {
                if (lastInnerWidth != document.documentElement.clientWidth) {
                    lastInnerWidth = document.documentElement.clientWidth;
                    if (lastInnerWidth <= 520) {
                        if (!(nav.classList.contains('hamburger'))) {
                            nav.classList.add('hamburger');
                        }
                    } else {
                        nav.classList.remove('hamburger');
                    }
                }
            });

            document.getElementById('hamburger__btn').addEventListener('click', function () {
                nav.style.display = "block";
                document.getElementById('hamburger__modal').style.display = "block";
            });
            document.getElementById('hamburger__modal').addEventListener('click', function () {
                nav.style.display = "none";
                document.getElementById('hamburger__modal').style.display = "none";
            });
        </script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function slideSwitch() {
                var $active = $('#slideshow img.active');
            
                if ( $active.length == 0 ) $active = $('#slideshow img:last');
            
                var $next =  $active.next().length ? $active.next()
                    : $('#slideshow img:first');
            
                $active.addClass('last-active');
            
                $next.css({opacity: 0.0})
                    .addClass('active')
                    .animate({opacity: 1.0}, 1000, function() {
                        $active.removeClass('active last-active');
                });
            }
            
            $(function() {
                setInterval( "slideSwitch()", 3000 );
            });
            </script>
    </header>
    <div class="top">
        <p id="slideshow">
            <img src="img/top1.png" alt="画像1" class="active">
            <img src="img/top2.png" alt="画像2">
            <img src="img/top3.png" alt="画像3">
        </p>
    </div>
    <div id="concept" class="concept content__items">
        <div class="content__inner">
            <div class="content__header">
                <div class="content__header__inner">
                    Concept
                    <div class="content__header__border"></div>
                </div>
            </div>
            <div class="concept__content">
                <div class="concept__img">
                    <img src="img/concept.png" alt="" class="">
                </div>
                <div class="concept__text">
                    <div class="concept__text__title">
                        オシャレに<br>
                        そして、機能的に
                    </div>
                    <div class="concept__text__dis">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト 
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="works" class="works content__items">
        <div class="content__inner">
            <div class="content__header">
                <div class="content__header__inner">
                    Works
                    <div class="content__header__border"></div>
                </div>
            </div>
            <div class="works__content">
                <div class="works__card">
                    <div class="works__card__img">
                        <img src="img/work1.png" alt="">
                    </div>
                    <div class="works__card__title">
                        マンションA
                    </div>
                    <div class="works__card__dis">
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                    </div>
                </div>
                <div class="works__card">
                    <div class="works__card__img">
                        <img src="img/work2.png" alt="">
                    </div>
                    <div class="works__card__title">
                        マンションB
                    </div>
                    <div class="works__card__dis">
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                    </div>
                </div>
                <div class="works__card">
                    <div class="works__card__img">
                        <img src="img/work3.png" alt="">
                    </div>
                    <div class="works__card__title">
                        美術館N
                    </div>
                    <div class="works__card__dis">
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                        ここにテキストが入りますここにテキストが入ります
                    </div>
                </div>
                <div class="works__button">
                    MORE
                    <a href="index.html" class="a__btn"></a>
                </div>
            </div>
        </div>
    </div>
    <div id="location" class="location content__items">
        <div class="content__inner">
            <div class="content__header">
                <div class="content__header__inner">
                    Location
                    <div class="content__header__border"></div>
                </div>
            </div>
        </div>
        <div class="location__content">
            <div class="location__text">
                <div class="location__text__dis">
                    原田建築株式会社<br>
                </div>
                <div class="location__adress">
                    住所：東京都渋谷区XXXX-XX-XX<br>
                    電話番号：XXX-XXX-XXXX<br>
                    営業時間：AM8:30～PM17:15<br>
                    定休日：土曜日・日曜日・祝日・年末年始・GW・お盆休み
                </div>
            </div>
            <div class="location__img">
                <img src="img/map.png" alt="" class="">
            </div>
        </div>
    </div>
    <div id="contact" class="contact content__items">
        <div class="content__inner">
            <div class="content__header">
                <div class="content__header__inner">
                    Contact
                    <div class="content__header__border"></div>
                </div>
            </div>
            <div class="contact__content">
                <div class="contact__text">
                    お問い合わせや仕事の依頼は<br>
                    下のより問い合わせ下さい
                </div>
                <div class="contact__button">
                    お問い合わせはこちらから
                    <a href="#" class="a__btn">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-main">
            <img src="img/footer.jpg" alt="">
            <p>2022 © HARADA　Construction Inc.</p>
        </div>
    </footer>
</body>
</html>