<?php
// список языков
/*$sites = array(
    "en" => "https://dev02.top/marketolog/en",
	"uk" => "https://dev02.top/marketolog/ua",
);

// получаем язык
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


// перенаправление на субдомен
header('Location: ' . $sites[$lang]);
*/
?>

<?php
	
	require "./assets/less/lessc.inc.php";
	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";

	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }

	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);

	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}

	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru" xmlns:og="http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <title>Маркетолог#2 | Управление маркетингом</title>
    <meta name="description" content="Управление маркетингом для бизнеса 'под ключ' Доверьте бизнес профессионалам!">

    <meta property="og:title" content="Маркетолог#2 | Управление маркетингом" />
    <meta property="og:description"
        content="Управление маркетингом для бизнеса 'под ключ' Доверьте бизнес профессионалам!" />
    <meta property="og:url" content="marketolog2.com" />

    <meta property="og:image" content="https://marketolog2.com/soc.jpg" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
    <script src="./assets/js/jquery-1.11.1.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/script.js"></script>

    <!-- bxSlider Javascript file -->
    <script src="./assets/js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="./assets/css/jquery.bxslider.css" rel="stylesheet" />
    <script>
        $(document).ready(function () {
            $('.slider_block').bxSlider({
                autoHover: 'true',
                pause: 2500,
                auto: 'true',
                slideMargin: 75,
                minSlides: 1,
                maxSlides: 4,
                moveSlides: 1,
                slideWidth: 211
            });

            $('.smi-wrap').bxSlider({                
                slideMargin: 60,
                minSlides: 1,
                maxSlides: 3,
                moveSlides: 1,
                slideWidth: 348
            });

            $('.slider2').bxSlider({
                pause: 5000,
                auto: 'true',
                touchEnabled: false,
                slideMargin: 59,
                minSlides: 1,
                maxSlides: 3,
                moveSlides: 1,
                slideWidth: 430,
                adaptiveHeight: true
            });
            $('.slideblock1').bxSlider({
                auto: 'true',
                slideMargin: 0,
                minSlides: 1,
                maxSlides: 5,
                moveSlides: 1,
                slideWidth: 211
            });

        });
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WFP4WS9');
    </script>
    <!-- End Google Tag Manager -->
    <script charset="UTF-8" src="//web.webpushs.com/js/push/562a786632c93aeb9e9325723d6bfce9_1.js" async></script>
    <script src="/assets/js/jquery.maskedinput.min.js"></script>


    <script>
        //Код jQuery, установливающий маску для ввода телефона элементу input
        //1. После загрузки страницы,  когда все элементы будут доступны выполнить...

        jQuery(document).ready(function () {
            //2. Получить элемент, к которому необходимо добавить маску
            $(".phone").mask("+38(099) 999-9999");
        });
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFP4WS9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="wrapper">
        <img src="assets/img/btn-call.png" id="scrollbtn" alt="" class="btn-call" data-toggle="modal"
            data-target="#myModal">
        <header>
            <div id="mobile_menu" class="mobile_menu visible-xs visible-sm visible-sm">
                <img class="myNew_img" src="assets/img/sss.png">
                <div class="container">
                    <div class="naw">
                        <div class="naw_li naw_li-sec1">Услуги</div>
                        <div class="naw_li naw_li-sec2">Проблемы и Решения</div>
                        <div class="naw_li naw_li-sec3">Как мы работаем</div>
                        <div class="naw_li naw_li-sec6">Отзывы</div>
                        <div class="naw_li naw_li-sec8">F.A.Q.</div>
                    </div>
                    <div class="soc">
                        <span>Следите за нами</span> <br><br>
                        <a href="https://www.facebook.com/marketolog2" target="_blank"><img src="assets/img/fb.png" alt=""></a>
                        <a href="https://www.youtube.com/c/Marketer2" target="_blank"><img src="assets/img/yt.png" alt=""></a>
                        <a href="https://t.me/marketolog2" target="_blank"><img src="assets/img/ttg.png" alt=""></a>
                        <a href="https://www.linkedin.cn/company/marketertwo" target="_blank"><img src="assets/img/lin.png" alt=""></a>
                    </div>
                    <div class="callback">
                        <button data-toggle="modal" data-target="#myModal">Заказать звонок</button>
                    </div>
                    <div class="lang">
                        <div class="lang-i">
                            <span>RU</span>
                        </div>
                        <div class="all_lang">
                            <span><a href="https://marketolog2.com/ua">UA</a></span>
                            <span><a href="https://marketolog2.com/en">EN</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <button class="visible-xs visible-sm" id="burger-menu">
                    <div class="box box_item1"></div>
                    <div class="box box_item2"></div>
                    <div class="box box_item3"></div>
                </button>
                <div class="menu">
                    <div class="left_b">
                        <div class="logo">
                            <a href="">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right_b">
                        <div class="soc">
                            <span>Следите за нами</span>
                            <a href="https://www.facebook.com/marketolog2" target="_blank"><img src="assets/img/fb.png"
                                    alt=""></a>
                            <a href="https://www.youtube.com/c/Marketer2" target="_blank"><img src="assets/img/yt.png"
                                    alt=""></a>
                                    <a href="https://t.me/marketolog2" target="_blank"><img src="assets/img/ttg.png" alt=""></a>
                                    <a href="https://www.linkedin.cn/company/marketertwo" target="_blank"><img src="assets/img/lin.png" alt=""></a>
                        </div>
                        <div class="faq">
                            <span class="tofaq">FAQ</span>
                        </div>
                        <div class="callback">
                            <button data-toggle="modal" data-target="#myModal">Заказать звонок</button>
                        </div>
                        <div class="lang">
                            <div class="lang-i">
                                <span>RU</span>
                            </div>
                            <div class="all_lang">
                                <span><a href="https://marketolog2.com/ua">UA</a></span>
                                <span><a href="https://marketolog2.com/en">EN</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <h1>
                        <span>Прибыльное</span> и <span>эффективное</span> <br> управление стратегическим
                        <br><span>маркетинг</span>ом компаний от А до Я
                    </h1>
                    <div class="video" data-toggle="modal" data-target="#video1">
                        <img src="assets/img/video_header.png" alt="" class="wow pulse" data-wow-iteration="300">
                        <span>Смотреть видео-приветствие</span>
                    </div>
                </div>
            </div>
        </header>
        <section class="sec1 ">
            <div class="container">
                <h2 class="center"><span>Наша</span> экспертиза</h2>
                <div class="slider_block">

                    <div class="slide">
                        <div class="popup_block">С чего начать процесс интернет-продвижения? Каких результатов сможете
                            достичь? Мы готовы помогать Вам и Вашему бизнесу от начала и до результатов!</div>
                        <img src="assets/img/s33.png" alt="">
                        <p>Интернет-маркетинг <br>"под ключ"</p>
                    </div>

                    
                    <div class="slide">
                        <div class="popup_block">
                            Полноценное исследование - рынка, ресурсов, аудитории вашего продукта, конкурентов - либо
                            все вместе взятое для успеха будущей маркетинговой стратегии!
                        </div>
                        <img src="assets/img/s4.png" alt="">
                        <p>МАРКЕТИНГ<br>АУДИТ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            У нас есть цель? Значит, обязана быть стратегия! Индивидуально для Вашего бизнеса, с учетом
                            его особенностей, потребностей и Ваших желаний!
                        </div>
                        <img class="mt" src="assets/img/s5.png" alt="">
                        <p>Маркетинг<br>СТРАТЕГИЯ </p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Готовы запускать рекламную кампанию? Убедитесь, что бюджет распределен верно - и ожидаемый
                            результат - тот, что вам нужен! Получите грамотный медиа-план сейчас!
                        </div>
                        <img src="assets/img/s6.png" alt="">
                        <p>Медиа<br>планирование</p>
                    </div>

                    <div class="slide">
                        <div class="popup_block">
                            Полное управление маркетингом Вашей компании - индивидуально, под ключ, с высокой долей
                            ответственности за результат!
                        </div>
                        <img src="assets/img/s8.png" alt="">
                        <p>Маркетинг-директор<br>на аутсорсе</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть нерегулярные задачи, требующие глубокого понимания вашего бизнеса и компании? Готовы
                            взять на поддержку, окружить Ваш бизнес заботой и любовью!
                        </div>
                        <img class="mt" src="assets/img/s9.png" alt="">
                        <p>Маркетинг поддержка<br>компаний, проектов</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Хотите инвестировать средства в новый бизнес? Гораздо лучше потратить тысячи долларов на
                            маркетинговые исследования, чем потерять десятки и сотни тысяч на бизнесе, который "не
                            взлетит"
                        </div>
                        <img src="assets/img/s10.png" alt="">
                        <p>Тест<br>бизнес-идеи</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Профессионально создаем уверенное "лицо" для бренда и бизнеса! Выделяйтесь среди
                            конкурентов, привлекайте клиентов, будьте в тренде!
                        </div>
                        <img class="mt" src="assets/img/s11.png" alt="">
                        <p>Профессиональный<br>ребрендинг</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Сомневаетесь в эффективности Вашей команды маркетологов? Доверьте проверку компетенций
                            профессионалам! Проведем оценку, и предоставим развернутые результаты и рекомендации!
                        </div>
                        <img src="assets/img/s12.png" alt="">
                        <p>Оценка компетенций<br>маркетинг-персонала</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть эффективная команда - и требуется рост ее компетенций? Составим индивидуальные
                            программы развития, и проконтролируем результат!
                        </div>
                        <img class="mt" src="assets/img/s13.png" alt="">
                        <p>Корпоративное<br>обучение и развитие</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">С чего начать процесс интернет-продвижения? Каких результатов сможете
                            достичь? Мы готовы помогать Вам и Вашему бизнесу от начала и до результатов!</div>
                        <img src="assets/img/s33.png" alt="">
                        <p>Интернет-маркетинг <br>"под ключ"</p>
                    </div>

                    
                    <div class="slide">
                        <div class="popup_block">
                            Полноценное исследование - рынка, ресурсов, аудитории вашего продукта, конкурентов - либо
                            все вместе взятое для успеха будущей маркетинговой стратегии!
                        </div>
                        <img src="assets/img/s4.png" alt="">
                        <p>МАРКЕТИНГ<br>АУДИТ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            У нас есть цель? Значит, обязана быть стратегия! Индивидуально для Вашего бизнеса, с учетом
                            его особенностей, потребностей и Ваших желаний!
                        </div>
                        <img class="mt" src="assets/img/s5.png" alt="">
                        <p>Маркетинг<br>СТРАТЕГИЯ </p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Готовы запускать рекламную кампанию? Убедитесь, что бюджет распределен верно - и ожидаемый
                            результат - тот, что вам нужен! Получите грамотный медиа-план сейчас!
                        </div>
                        <img src="assets/img/s6.png" alt="">
                        <p>Медиа<br>планирование</p>
                    </div>

                    <div class="slide">
                        <div class="popup_block">
                            Полное управление маркетингом Вашей компании - индивидуально, под ключ, с высокой долей
                            ответственности за результат!
                        </div>
                        <img src="assets/img/s8.png" alt="">
                        <p>Маркетинг-директор<br>на аутсорсе</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть нерегулярные задачи, требующие глубокого понимания вашего бизнеса и компании? Готовы
                            взять на поддержку, окружить Ваш бизнес заботой и любовью!
                        </div>
                        <img class="mt" src="assets/img/s9.png" alt="">
                        <p>Маркетинг поддержка<br>компаний, проектов</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Хотите инвестировать средства в новый бизнес? Гораздо лучше потратить тысячи долларов на
                            маркетинговые исследования, чем потерять десятки и сотни тысяч на бизнесе, который "не
                            взлетит"
                        </div>
                        <img src="assets/img/s10.png" alt="">
                        <p>Тест<br>бизнес-идеи</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Профессионально создаем уверенное "лицо" для бренда и бизнеса! Выделяйтесь среди
                            конкурентов, привлекайте клиентов, будьте в тренде!
                        </div>
                        <img class="mt" src="assets/img/s11.png" alt="">
                        <p>Профессиональный<br>ребрендинг</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Сомневаетесь в эффективности Вашей команды маркетологов? Доверьте проверку компетенций
                            профессионалам! Проведем оценку, и предоставим развернутые результаты и рекомендации!
                        </div>
                        <img src="assets/img/s12.png" alt="">
                        <p>Оценка компетенций<br>маркетинг-персонала</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть эффективная команда - и требуется рост ее компетенций? Составим индивидуальные
                            программы развития, и проконтролируем результат!
                        </div>
                        <img class="mt" src="assets/img/s13.png" alt="">
                        <p>Корпоративное<br>обучение и развитие</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">С чего начать процесс интернет-продвижения? Каких результатов сможете
                            достичь? Мы готовы помогать Вам и Вашему бизнесу от начала и до результатов!</div>
                        <img src="assets/img/s33.png" alt="">
                        <p>Интернет-маркетинг <br>"под ключ"</p>
                    </div>

                    
                    <div class="slide">
                        <div class="popup_block">
                            Полноценное исследование - рынка, ресурсов, аудитории вашего продукта, конкурентов - либо
                            все вместе взятое для успеха будущей маркетинговой стратегии!
                        </div>
                        <img src="assets/img/s4.png" alt="">
                        <p>МАРКЕТИНГ<br>АУДИТ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            У нас есть цель? Значит, обязана быть стратегия! Индивидуально для Вашего бизнеса, с учетом
                            его особенностей, потребностей и Ваших желаний!
                        </div>
                        <img class="mt" src="assets/img/s5.png" alt="">
                        <p>Маркетинг<br>СТРАТЕГИЯ </p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Готовы запускать рекламную кампанию? Убедитесь, что бюджет распределен верно - и ожидаемый
                            результат - тот, что вам нужен! Получите грамотный медиа-план сейчас!
                        </div>
                        <img src="assets/img/s6.png" alt="">
                        <p>Медиа<br>планирование</p>
                    </div>

                    <div class="slide">
                        <div class="popup_block">
                            Полное управление маркетингом Вашей компании - индивидуально, под ключ, с высокой долей
                            ответственности за результат!
                        </div>
                        <img src="assets/img/s8.png" alt="">
                        <p>Маркетинг-директор<br>на аутсорсе</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть нерегулярные задачи, требующие глубокого понимания вашего бизнеса и компании? Готовы
                            взять на поддержку, окружить Ваш бизнес заботой и любовью!
                        </div>
                        <img class="mt" src="assets/img/s9.png" alt="">
                        <p>Маркетинг поддержка<br>компаний, проектов</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Хотите инвестировать средства в новый бизнес? Гораздо лучше потратить тысячи долларов на
                            маркетинговые исследования, чем потерять десятки и сотни тысяч на бизнесе, который "не
                            взлетит"
                        </div>
                        <img src="assets/img/s10.png" alt="">
                        <p>Тест<br>бизнес-идеи</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Профессионально создаем уверенное "лицо" для бренда и бизнеса! Выделяйтесь среди
                            конкурентов, привлекайте клиентов, будьте в тренде!
                        </div>
                        <img class="mt" src="assets/img/s11.png" alt="">
                        <p>Профессиональный<br>ребрендинг</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Сомневаетесь в эффективности Вашей команды маркетологов? Доверьте проверку компетенций
                            профессионалам! Проведем оценку, и предоставим развернутые результаты и рекомендации!
                        </div>
                        <img src="assets/img/s12.png" alt="">
                        <p>Оценка компетенций<br>маркетинг-персонала</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть эффективная команда - и требуется рост ее компетенций? Составим индивидуальные
                            программы развития, и проконтролируем результат!
                        </div>
                        <img class="mt" src="assets/img/s13.png" alt="">
                        <p>Корпоративное<br>обучение и развитие</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="container">
                <h2 class="center"><span>Проблемы</span> и решения</h2>
                <div class="desc center">Нажмите на Проблему, чтобы увидеть Решение</div>

                <div class="drop_block">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Мы хотим увеличить продажи в нашем бизнесе
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="list">Да, мы сможем вам помочь. Нужно погрузиться в ваш бизнес,
                                        операционные процессы и провести качественный аудит. Хорошее исследование
                                        позволит нам избежать многих ошибок в работе <br>
                                        Как правило, многие клиенты/компании хотят просто увеличить продажи - не
                                        понимая, что увеличение чистой прибыли зачастую может быть достигнуто
                                        <b>уменьшением издержек</b> и <b>улучшением бизнес-процессов</b> <br>
                                        Довольно частая ситуация, когда бизнес хочет много новых клиентов - но
                                        бизнес-процессы внутри компании не готовы к такому всплеску - и поток новых
                                        клиентов только навредит бизнесу. Так или иначе, свяжитесь с нами и расскажите о
                                        своей проблеме - и мы вместе <b>найдем верное решение</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Наш штатный специалист не справляется с работой
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
                                        Мы понимаем, это довольно частая ситуация. Почему вы считаете, что он не
                                        справляется? У вас есть анализ конкурентов/рынка/маркетинговая стратегия? Как
                                        ваш штатный специалист или команда интегрированы в стратегию развития вашей
                                        компании/бренда? С чем именно не справляется специалист? Достаточно ли компании
                                        его компетенций - или просто нужно правильно их распределить? <br>
                                        Как вы уже наверное поняли - <b>нужно</b> "садиться за стол переговоров" и
                                        <b>разбираться</b>. Для этого свяжитесь с нами через этот сайт!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Мы не знаем - правильно ли мы ведем себя на рынке
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">Давайте погрузимся в ваши бизнес-процессы, проведем анализ
                                        конкурентов и попробуем разобраться вместе! Без <b>грамотного аудита</b> это
                                        всего лишь гипотезы</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree1">
                                        Мы хотим убедиться, что полностью используем все возможности роста бизнеса в
                                        нашей компании
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">Мы сможем помочь вам разобраться в этом вопросе только проведя
                                        <b>качественный аудит</b> процессов в вашей компании. Когда начинаем? Свяжитесь
                                        с нами через сайт!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2">
                                        Мы хотим увеличить чистую прибыль
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">Увеличение чистой прибыли - <b>это комплексная работа</b> над
                                        компанией/бизнесом. Зачастую для этого даже не нужно увеличивать продажи или
                                        количество клиентов - а просто <b>правильно построить бизнес-процессы</b> и
                                        <b>уменьшить напрасные издержки</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree3">
                                        У нас начались кассовые разрывы
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
                                        Это серьезная проблема, которая требует <b>немедленного вмешательства</b> и
                                        серьезного <b>аудита процессов</b>. Мы готовы помочь!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree4">
                                        Вся компания работает в режиме "ручного управления собственником"
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
                                        Такое бывает достаточно часто. Как правило это связано с отсутствием качественно
                                        построенных бизнес-процессов. Более того, такая ситуация <b>ограничивает бизнес
                                            в развитии</b>. Мы знаем как помочь. Свяжитесь с нами
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree5">
                                        К нам перестали приходить новые клиенты
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
                                        Этот вопрос вызван необходимостью роста - либо у вас уходят старые клиенты?
                                        Почему клиенты уходят? Какой уровень новых клиентов будет для вас приемлемым?
                                        Что нужно сделать чтобы все получилось? <b>Давайте</b> "садиться за стол
                                        переговоров" и <b>разбираться вместе!</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree6">
                                        Сайт конкурентов лучше, поэтому мы теряем клиентов
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
                                        Скорее всего, это гипотеза. Но мы понимаем, что вы можете быть недовольны
                                        состоянием ваших веб-ресурсов. Для того, чтобы опровергнуть эту гипотезу или
                                        подтвердить ее <b>нужно</b> провести аудит ваших веб-ресурсов (а вдруг что-то
                                        можно исправить?) - и аудит ресурсов конкурентов, и <b>провести "работу над
                                            ошибками"</b>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <section class="sec3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-6">
                        <div class="block">
                            <div class="t1"><span>Как</span> мы работаем</div>
                            <div class="t2">В этом видео основатель компании "Маркетолог#2" Юрий Будилов<br> поэтапно
                                рассказывает весь путь работы компании с бизнесом,<br> то есть с клиентскими проектами
                            </div>
                        </div>
                        <div class="video" data-toggle="modal" data-target="#video2">
                            <img src="assets/img/video_header.png" alt="" class="wow pulse" data-wow-iteration="300">
                            <span>Смотреть видео об этапах работы </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container">
                <h2 class="center"><span>Этапы</span> нашей работы</h2>

                <div class="block">
                    <div class="item-2 bleft wow fadeIn" data-wow-delay="0.1s">
                        <div class="item ">
                        <img src="assets/img/dd1.png" alt="">
                        <div class="t1"><b>Знакомство</b>
                            с проектом, компанией,<br>
                            бизнесом</div>
                        <div class="t2">01</div>
                    </div>
                    </div>
                    <div class="item-2 bleft wow fadeIn" data-wow-delay="0.3s">
                        <div class="item">
                            <img src="assets/img/dd2.png" alt="">
                        <div class="t1"><b>Консультация —</b>
                            исследование<br>
                            проблемы/задачи</div>
                        <div class="t2">02</div>
                        </div>
                    </div>
                    <div class="item-2 bleft wow fadeIn" data-wow-delay="0.5s">
                        <div class="item">
                            <img src="assets/img/dd3.png" alt="">
                        <div class="t1"><b>Маркетинг-аудит —</b>
                            проекта, процессов,<br>
                            компании</div>
                        <div class="t2">03</div>
                        </div>
                    </div>
                    <div class="item-2 bleft wow fadeIn" data-wow-delay="0.7s">
                        <div class="item">
                            <img src="assets/img/dd4.png" alt="">
                        <div class="t1"><b>Стратегия —</b>
                            проработка road map<br>
                            до мелочей</div>
                        <div class="t2">04</div>
                        </div>
                    </div>
                    <div class="item-2 wow fadeIn" data-wow-delay="1.5s">
                        <div class="item">
                            <img src="assets/img/dd8.png" alt="">
                        <div class="t1"><b>Пост-поддержка —</b>
                            чтобы результат был<br>
                            долгим!</div>
                        <div class="t2">08</div>
                        </div>
                    </div>
                    <div class="item-2 wow fadeIn" data-wow-delay="1.3s">
                        <div class="item">
                            <img src="assets/img/dd7.png" alt="">
                        <div class="t1"><b>Фиксируем результат!</b>
                            — с гарантией<br>
                            выполнения</div>
                        <div class="t2">07</div>
                        </div>
                    </div>
                    <div class="item-2 wow fadeIn" data-wow-delay="1.1s">
                        <div class="item"><img src="assets/img/dd6.png" alt="">
                        <div class="t1"><b>Проектное управление —</b>
                            с погружением<br>
                            «под ключ»</div>
                        <div class="t2">06</div></div>
                    </div>
                    <div class="item-2 wow fadeIn" data-wow-delay="0.9s">
                        <div class="item">
                            <img src="assets/img/dd5.png" alt="">
                        <div class="t1"><b>Планирование —</b>
                            результатов,<br>
                            постановка целей</div>
                        <div class="t2">05</div>
                        </div>
                    </div>
                </div>                

            </div>
        </section>

        <section class="sec4-1">
            <div class="container">
                <div class="soc-block">
                    <div class="t1"><span>Следите</span> за нами там, где удобно:</div>
                    <div class="links">
                        <a href="https://www.youtube.com/c/Marketer2" target="_blank"><img src="assets/img/youtube.png" alt=""></a>
                        <a href="https://www.facebook.com/marketolog2" target="_blank"><img src="assets/img/facebook_(1).png" alt=""></a>
                        <a href="https://t.me/marketolog2" target="_blank"><img src="assets/img/telegram.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec5">
            <div class="container">
                <h2 class="center"><span>Теперь то же самое,</span> только в цифрах</h2>
                <div class="block">
                    <div class="item">
                        <div class="t1 it1 rotateIn wow" data-wow-duration="1s" data-wow-delay="1s">

                        </div>
                        <span>14+</span>
                        <div class="t2">
                            Лет опыта в маркетинге
                        </div>
                    </div>
                    <div class="item">
                        <div class="t1 it2 rotateIn wow" data-wow-duration="1s" data-wow-delay="2s">

                        </div>
                        <span>149+</span>
                        <div class="t2">
                            Инструментов для бизнеса
                        </div>
                    </div>
                    <div class="item">
                        <div class="t1 it3 rotateIn wow" data-wow-duration="1s" data-wow-delay="3s">

                        </div>
                        <span>250+</span>
                        <div class="t2">
                            Реализованных проектов
                        </div>
                    </div>
                </div>

                <div class="form_block">
                    <div class="t1">
                        Подайте заявку сейчас и получите специальное предложение!
                    </div>
                    <div class="t2">
                        Индивидуальная встреча-консультация с экспертом, с целью оптимизации маркетинг-процессов в Вашем
                        бизнесе
                    </div>

                    <div class="form">
                        <form action="sender.php" method="post">
                            <div class="inpb">
                                <input class="name" name="name" type="text" placeholder="Ваше имя">
                            </div>
                            <div class="inpb">
                                <input class="phone" name="phone" type="text" placeholder="Ваш телефон*" required>
                            </div>
                            <div class="inpb">
                                <input class="email" name="post" type="text" placeholder="example@mail.com">
                            </div>
                            <div class="inpbutton">
                                <button type="button" class="send">Отправить заявку</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </section>
<section class="smi">
    <div class="container">
        <h2 class="center">Маркетолог<span>#</span>2 в СМИ</h2>
        <div class="block smi-wrap">
            <div class="item">
                <a href="https://economics.segodnya.ua/economics/enews/nalog-na-google-kto-budet-platit-i-naskolko-podorozhayut-igry-stikery-i-podpiski-1556210.html
" rel= "nofollow">
                    <img src="assets/img/smi1.png" alt="">
                    <div class="t1">«Налог на Google». Насколько подорожают электроные услуги</div>
                    <div class="t2">СЕГОДНЯ</div>
                </a>                
            </div>
            <div class="item">
                <a href="https://vc.ru/marketing/72037-agentstvo-ili-inhaus-komanda-chto-effektivnee-dlya-malogo-biznesa

" rel= "nofollow">
                    <img src="assets/img/smi2.png" alt="">
                    <div class="t1">Агентство или инхаус-команда: что эффективнее для малого бизнеса</div>
                    <div class="t2">VC.ru</div>
                </a>                
            </div>
            <div class="item">
                <a href="https://drive.google.com/file/d/1dRKDBWi4oVI5G2Xh45VwwIj0_qle2VYz/view?usp=sharing

" rel= "nofollow">
                    <img src="assets/img/smi3.png" alt="">
                    <div class="t1">Как прекратить назойливую рекламную SMS-рассылку</div>
                    <div class="t2">Советы юриста</div>
                </a>                
            </div>



            <div class="item">
                <a href="https://agroportal.ua/ua/publishing/infografika/politiki-vs-sotsseti-nuzhen-li-agrarnomu-lobbi-facebook/

" rel= "nofollow">
                    <img src="assets/img/smi4.png" alt="">
                    <div class="t1">Политики VS соцсети: нужен ли аграрному лобби Facebook</div>
                    <div class="t2">AgroPortal</div>
                </a>                
            </div>



            <div class="item">
                <a href="https://buduysvoe.com/ru/publications/lidogeneraciya-i-biznes-ekspertnoe-mnenie" rel= "nofollow">
                    <img src="assets/img/smi6.png" alt="">
                    <div class="t1">Лидогенерация и Бизнес: Экспертное мнение</div>
                    <div class="t2">Строй свое!</div>
                </a>                
            </div>


            <div class="item">
                <a href="https://drive.google.com/file/d/1hAmhl0tPq6Q8KZaoz5QsGXHp2vIZ2AmF/view

" rel= "nofollow">
                    <img src="assets/img/smi5.png" alt="">
                    <div class="t1">Директор по маркетингу на аутсорсе - новая реальность украинского бизнеса</div>
                    <div class="t2">Маркетинг и реклама</div>
                </a>                
            </div>
        </div>
    </div>
</section>


        <section class="sec6">
            <div class="container">
                <h2 class="center"><span>Отзывы</span> о нас</h2>
                <div class="block">
                    <div class="slider2">
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s61.png" alt="">
                            </div>
                            <p>
                                <b>Елизавета Шепетильникова</b><br>
                                Знакомы с компанией "Маркетолог#2" уже несколько лет и сотрудничаем в разных проектных
                                направлениях: от организации и проведения тренингов для ТОП-руководителей нашей
                                организации до проектного сопровождения наших мероприятий, создания нового сайта,
                                развития проектов в социальных сетях и многих других задач. Так что смело рекомендую
                                "Маркетолог#2" к сотрудничеству, ведь они дейстивтельно мастера своего дела
                            </p>
                            <a href="https://www.facebook.com/lissashch" target="_blank">Senior Adviser/EdUSA
                                Ukraine</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s62.png" alt="">
                            </div>
                            <p>
                                <b>Денис Чернобаев</b> <br>
                                При том, что я лично знал ребят еще с тех пор, когда они были маленькой веб-студией в
                                Одессе - очень долго, года три, не решался обратиться за помощью. Будучи
                                предпринимателем, ты всегда все стараешься сделать и вытянуть самостоятельно. Только
                                сейчас понимаю, как сильно ошибался раньше. Буквально за пару месяцев мы сделали
                                значительный прорыв: провели ребрендинг, разработали стратегию развития и начали ее
                                внедрять. Готовим к запуску целый пул активностей в интернет-рекламе, печатаем
                                полиграфию и брендированный мерч для наших клиентов. В общем, все бурлит! Кстати, если
                                нужно видео для бизнеса - обращайтесь - мы с радостью поможем! :-)
                            </p>
                            <a href="https://www.facebook.com/tiberianSunny" target="_blank">Bona Idea Production /
                                Owner</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s63.jpg" alt="">
                            </div>
                            <p>
                                <b>Вадим Керничий</b><br>
                                Познакомились с компанией благодаря случаю: жена искала что-то на YouTube и случайно
                                попала на канал компании "Маркетолог#2". Мы посмотрели несколько видео и поняли, что
                                очень мало понимаем в маркетинге, поэтому решили обратиться за консультацией. Наш проект
                                длился 5 месяцев. Не смотря на то, что за весь период работы непосредственно с командой
                                "Маркетолог#2" мы виделись только один раз, все задачи по проекту были выполнены четко и
                                в оговоренные срок. Огромное "Спасибо" стоит сказать за то, что команда "толкает"
                                сторону заказчика, когда мы забывали что-то сделать со свеой стороны.
                            </p>
                            <b>BORO / Founder</b>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s64.png" alt="">
                            </div>
                            <p>
                                <b>Виктор Войцеховский</b><br>
                                Мы просто попытались найти в компанию маркетолога. А нашли команду, которая перевернула
                                наше представление о мире Маркетинга с головы на ноги. Самое сложное было - просто
                                начать доверять на 100% ребятам - мы справились за два месяца. Жаль, что не в первый же
                                день - тогда результаты были бы раньше! Сейчас, по окончанию 5-месячного контракта
                                подписали пролонгацию договора еще на 5 месяцев. Наш бизнес растет, обновляем команду,
                                переехали в новый красивый офис и продолжаем день за днем оптимизировать
                                бизнес-процессы. Большое спасибо за дружбу и эффективное партнерство!
                            </p>
                            <a href="https://www.facebook.com/viktor.voytsekhovskiy" target="_blank">LASTICK /
                                Основатель, собственник</a>
                        </div>

                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s67.png" alt="">
                            </div>
                            <p>
                                <b>Максим Пасынок</b><br>
                                Ребята быстро погрузились внутрь компании, глубоко изучили бизнес-процессы, разработали
                                маркетинг стратегию. Мы и снимали ролики о компании, и работали со всеми нужными видами
                                рекламы, и даже реструктурировали отдел продаж. Благодаря этому у нас повысился уровень
                                возвращаемости клиентов, мы уже открыли новый розничный магазин. С нами даже начала
                                работать одна крупная компания в В2В-сегменте. Раньше мы вообще не понимали, что такое
                                Маркетинг, но это изменилось после знакомства с командой Маркетолог#2.
                            </p>
                            <a href="https://www.facebook.com/maxim.konors" target="_blank">KONORS / Co-owner</a>
                        </div>
                    </div>
                </div>
                <div class="button_block">
                    <button data-toggle="modal" data-target="#videoall"><span>Смотреть видео-отзывы</span> <img
                            src="assets/img/mini_play.png" alt=""></button>
                </div>
            </div>
        </section>
        <section class="sec7">
            <div class="container">
                <h2 class="center"><span>Наши</span> друзья, клиенты и партнеры</h2>

                <div class="block">
                    <div class="slider3 center">
                        <div class="slideblock1">
                            <div class="slide"><img src="assets/img/partners/1.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/2.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/3.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/4.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/5.png" alt=""></div>
                            <div class="slide"><img  src="assets/img/partners/6.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/7.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/8.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/9.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/10.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/11.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/12.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/14.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/15.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/16.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/17.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/18.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/19.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/20.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/21.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/22.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/23.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/24.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/25.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/26.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/27.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/28.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/29.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/30.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/31.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/32.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/33.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/34.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/35.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/36.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/38.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/39.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/40.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/41.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/42.png" alt=""></div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="sec8">
            <div class="container">
                <h2 class="center"><span>Часто</span> задаваемые вопросы</h2>
                <div class="desc hidden-xs hidden-sm hidden-md center">Кликайте на интересующий вопрос слева - читайте
                    ответ справа!</div>
                <div class="desc visible-xs visible-sm visible-md center">Кликайте на интересующий вопрос и читайте
                    ответ!</div>

                <div class="block">
                    <div class="left_b">
                        <div class="list ls1">
                            <span>Так вы занимаетесь рекламой или продвижением?</span>
                            <div class="contmobblock coco1 hidden-lg">
                                <p>Увы, из-за повального нашествия "гуру инфобизнеса" многие понятия и термины в
                                    реальном мире часто путают с вымыслом</p>

                                <p>Управление маркетингом - это построение бизнес-процессов, Promotion (продвижение) -
                                    часть маркетинга, а реклама - часть продвиждения</p>

                                <p>Мы вместе с собственниками/инвесторами выстраиваем бизнес-процессы - конечно же,
                                    включая вопросы позиционирования, продвижения - и рекламы</p>

                                <p>Если по порядку - то это: маркетинг-аудит, согласование концепции развития,
                                    утверждение стратегии, бюджетирование и активные действия. Однако, все может
                                    отличаться - в зависимости от особенностей и задач Вашего бизнеса</p>
                            </div>
                        </div>
                        <div class="list ls2"><span>Можете помочь с рекламой в интернете?</span>
                            <div class="contmobblock coco2 hidden-lg">
                                <p>У нас большой опыт работы с проектами в интернет-продвижении: от разработки концепции
                                    будущего сайта - до реализации маркетинговых стратегий онлайн, для любой аудитории -
                                    это около 180 проектов на сегодняшний день.</p>
                                <p>Однако, мы не являемся агентством интернет-продвижения - которое выполняет задачи на
                                    аутсорсе. Под разработанную - и согласованную с Заказчиком стратегию мы помогаем
                                    оценить специалистов при подборе в штат. Привлекаем нужных на аутсорсе (если нет
                                    необходимости держать в компании штатную единицу), и даже выстраиваем правильное
                                    взаимодействие с агентствами. Да что там - можем целую мини-студию для съемки видео
                                    на YouTube в вашем офисе организовать. Одним словом - были бы задачи - а как их
                                    выполнить - это уже наша забота</p>
                            </div>
                        </div>
                        <div class="list ls3"><span>Сколько стоит ваша работа? </span>
                            <div class="contmobblock coco3 hidden-lg">
                                <p>Бюджеты относительны. Все зависит от задач, их объемов и ответственности, которые
                                    ложатся на нашу компанию</p>
                                <p>Мы беремся за проекты сроком от 3 месяцев, и стоимостью от $1000 за проект - но
                                    поверьте, эти цифры ничего не скажут вам При этом максимальная стоимость проекта, с
                                    которым мы работали оценивалась в $120.000 за несколько месяцев его реализации</p>
                                <p>Да, много переменных. Да, можно оплачивать поэтапно. И еще много всего</p>
                                <p>Что насчет пообщаться лично, и прояснить ситуацию лучше?</p>
                            </div>
                        </div>
                        <div class="list ls4"><span>Сколько проектов вы уже выполнили? </span>
                            <div class="contmobblock coco4 hidden-lg">
                                <p>Уже где-то писали - но повторимся: сегодня у нас за плечами более 180
                                    маркетинг-проектов в интернет-продвижении, и около 40 компаний, в которых мы
                                    помогали выстраивать бизнес-процессы ""под ключ""</p>
                                <p>С одной стороны - в каждом бизнесе работают примерно одинаковые модели развития и
                                    роста. С другой - каждому бизнесу нужен свой, индивидуальный подход</p>
                                <p>Виртуозно совмещая оба момента, и добавляя психологию изменений для Собственников мы
                                    и получаем отличные результаты для наших клиентов!</p>
                            </div>
                        </div>
                        <div class="list ls5"><span>Мне не нужны сотрудники в штат - как быть? </span>
                            <div class="contmobblock coco5 hidden-lg">
                                <p>Условия нашей будущей работы будут зависеть от вводных, которые мы получим от
                                    Собственника/Заказчика еще на старте проекта.</p>
                                <p>Не в штат - значит, не в штат.</p>
                                <p>Многие маркетологи и маркетинг-директора боятся работать с удаленными
                                    сотрудниками/фрилансерами. Наша сильная сторона - навыки и опыт эффективного
                                    построения такой работы. Называйте это "профессиональной фишкой", Ок? )</p>
                            </div>
                        </div>
                        <div class="list ls6"><span>Как давно существует ваша компания? </span>
                            <div class="contmobblock coco6 hidden-lg">
                                <p>Под названием "Маркетолог#2" мы работаем более двух лет. Однако суммарный опыт в
                                    маркетинге и построении бизнес-процессов более 12 лет</p>
                                <p>Наш практический опыт - очень разный, при этом достаточно глубокий: ивент-бизнес, BTL
                                    (промоакции), FMCG ритейл и построение комбинированных бизнес-систем, организация
                                    бизнеса по части спорта, туризма, проката спортивного снаряжения и экстремального
                                    отдыха, и даже опыт работы в качестве агентства интернет-продвижения - и многие
                                    другие примеры</p>
                                <p>Однако, поверьте: к Вашему бизнесу мы подойдем индивидуально, "с чистого листа"</p>
                            </div>
                        </div>
                        <div class="list ls7"><span>Нам нужно провести ребрендинг</span>
                            <div class="contmobblock coco7 hidden-lg">
                                <p>С радостью поможем. Разработаем концепцию бренда, привлечем лучших дизайнеров (по
                                    крайней мере тех - которые поместятся в бюджет), и буквально вдохнем Новую Жизнь в
                                    позиционирование Вашей компании.</p>
                                <p>Конечно же, работы будут включать в себя разработку фирменного стиля для всех Точек
                                    Контакта Вашей Компании с аудиторией - а значит, все будет выглядеть профессионально
                                </p>
                                <p>Мы любим детали: лаконичность форм, правильно подобранные цвета (несущие правильный
                                    смысл), шрифты и прочие мелочи. Дьявол в мелочах, знаете такую фразу?</p>
                            </div>
                        </div>
                        <div class="list ls8"><span>Нам срочно нужен сайт</span>
                            <div class="contmobblock coco8 hidden-lg">
                                <p>У Вас два варианта.</p>
                                <p>Первый - позвонить в первую попавшуюся веб-студию - они с радостью помогут Вам
                                    потушить любой пожар за ваши деньги</p>
                                <p>Второй - осознать, что сайт - это сложный структурный механизм, через который должны
                                    быть пропущены ценности компании, ее продукты и удобство получения информации для
                                    клиетов. А еще сайт должен отвечать огромному числу технических требований - о
                                    которых Вам вряд ли расскажут в студиях по многим причинам. Если вы решили подойти к
                                    процессу осознанно - лучше на первое время сделать сайт-заглушку, визитку - и пройти
                                    весь путь правильно: аудит компании, стратегия, ценности, продукты, дифференциация
                                    от рынка - а уже потом ""упаковывать"" веб-представленность. Мы работаем по такому
                                    варианту, так как отвечаем за результаты</p>
                            </div>
                        </div>
                        <div class="list ls9 active"><span>Есть что-то, чем вы не занимаетесь?</span>
                            <div style="display:block;" class="contmobblock coco9 hidden-lg">
                                <p>Вопрос почти провокационный )</p>
                                <p>По части нашей специализации - Управлению Маркетингом, наша задача - Управлять
                                    Процессами, а не "Делать Руками". Естественно, что с привлечениями специалистов и
                                    подрядчиков нам под силу практически любая задача. ОДНАКО если окажется так, что
                                    задачи Вашего бизнеса находятся Вне Нашей Компетенции - мы честно и открыто
                                    признаемся в этом - и постараемся рекомендовать проверенных и надежных партнеров для
                                    вас</p>
                                <p>Принцип простой: или делай свою работу великолепно, или не делай ее вообще</p>
                            </div>
                        </div>

                    </div>
                    <div class="right_b">
                        <div class="cont_block">
                            <p>Увы, из-за повального нашествия "гуру инфобизнеса" многие понятия и термины в реальном
                                мире часто путают с вымыслом</p>

                            <p>Управление маркетингом - это построение бизнес-процессов, Promotion (продвижение) - часть
                                маркетинга, а реклама - часть продвиждения</p>

                            <p>Мы вместе с собственниками/инвесторами выстраиваем бизнес-процессы - конечно же, включая
                                вопросы позиционирования, продвижения - и рекламы</p>

                            <p>Если по порядку - то это: маркетинг-аудит, согласование концепции развития, утверждение
                                стратегии, бюджетирование и активные действия. Однако, все может отличаться - в
                                зависимости от особенностей и задач Вашего бизнеса</p>
                        </div>
                    </div>
                </div>


                <div class="inf-block">
                    <div class="bb1">Не получили ответ на свой вопрос? </div>
                    <button data-toggle="modal" data-target="#myModal">Заказать консультацию</button>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="block hidden-sm hidden-md">
                    <div class="logo">
                        <a href="">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="urik">
                        <a href="https://www.akingump.com/en/" target="_blank">Юридическая поддержка</a>
                    </div>
                    <div class="cont">
                        <a href="https://goo.gl/maps/FPF6NitkMHnWtP5J6" target="_blank"><img src="assets/img/m1.png"
                                alt=""><span>Киев, О. Довженка 3</span></a>
                        <a href="mailto:office@marketolog2.com"><img src="assets/img/m2.png"
                                alt=""><span>office@marketolog2.com</span></a>
                    </div>
                    <div class="soc">
                        <a href="https://www.facebook.com/marketolog2" target="_blank">
                            <img src="assets/img/ffb.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/c/Marketer2" target="_blank">
                            <img src="assets/img/fyt.png" alt="">
                        </a>
                        <a href="https://www.linkedin.cn/company/marketertwo" target="_blank"><img src="assets/img/lin.png" alt=""></a>
                    </div>
                    <div class="totop bounce wow" data-wow-iteration="300">
                        <img src="assets/img/top.png" alt="">
                    </div>
                </div>
                <div class="block visible-sm visible-md">
                    <div class="dflexx">
                        <div class="logo">
                            <a href="">
                                <img src="assets/img/logofooter.png" alt="">
                            </a>
                        </div>
                        <div class="urik">
                            <a href="https://www.akingump.com/en/" target="_blank">Юридическая поддержка</a>
                        </div>
                    </div>
                    <div class="dflexx my2flex">
                        <div class="cont">
                            <a href="https://goo.gl/maps/FPF6NitkMHnWtP5J6" target="_blank"><img src="assets/img/m1.png"
                                alt=""><span>Киев, О. Довженка 3</span></a>
                            <a href="mailto:office@marketolog2.com"><img src="assets/img/m2.png"
                                    alt=""><span>office@marketolog2.com</span></a>
                        </div>
                        <div class="soc">
                            <a href="https://www.facebook.com/marketolog2" target="_blank">
                                <img src="assets/img/ffb.png" alt="">
                            </a>
                            <a href="https://www.youtube.com/c/Marketer2" target="_blank">
                                <img src="assets/img/fyt.png" alt="">
                            </a>
                            <a href="https://www.linkedin.cn/company/marketertwo" target="_blank"><img src="assets/img/lin.png" alt=""></a>
                        </div>
                    </div>
                    <div class="totop bounce wow" data-wow-iteration="300">
                        <img src="assets/img/top.png" alt="">
                    </div>
                </div>
            </div>
        </footer>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Подайте заявку сейчас <br>
                        и получите <span>специальное</span><br> предложение!
                    </h4>
                </div>
                <div class="modal_body">
                    <div class="subtitle center">
                        Индивидуальная встреча-консультация <br> с экспертом, с целью оптимизации <br>
                        маркетинг-процессов в Вашем бизнесе
                    </div>

                    <div class="form">
                        <form action="sender.php" method="post">
                            <div class="inpb">
                                <input class="name" name="name" type="text" placeholder="Ваше имя">
                            </div>
                            <div class="inpb">
                                <input class="phone" name="phone" type="text" placeholder="Ваш телефон*" required>
                            </div>
                            <div class="inpb">
                                <input class="email" name="post" type="text" placeholder="example@mail.com">
                            </div>
                            <div class="inpbutton">
                                <button type="button" class="send">Отправить заявку</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="myThx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Благодарим за Вашу активность, мы свяжемся с Вами в ближайшее время!
                    </h4>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade videoblock" id="video1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="video1 embed-responsive-item" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade videoblock" id="video2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="video1 embed-responsive-item" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade videoblock" id="videoall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="video1 embed-responsive-item" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script>
        $('#video1').on('show.bs.modal', function (e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/uhiU2Nhnbrk?autoplay=1');
        });
        $('#video1').on('hidden.bs.modal', function (e) {
            $(this).find('.video1').attr('src', '');
        });
        $('#video2').on('show.bs.modal', function (e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/yq9JCerrT00?autoplay=1');
        });
        $('#video2').on('hidden.bs.modal', function (e) {
            $(this).find('.video1').attr('src', '');
        });
        $('#videoall').on('show.bs.modal', function (e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/lSpHLL3omb8?autoplay=1');
        });
        $('#videoall').on('hidden.bs.modal', function (e) {
            $(this).find('.video1').attr('src', '');
        });

        var burgerCtr = document.querySelector("#burger-menu");
        var menuCtr = document.querySelector("#mobile_menu");
        burgerCtr.addEventListener("click", function () {
            this.classList.toggle("active");
            menuCtr.classList.toggle("show_mobile_menu");
        });





        var scrolling = document.querySelector("#scrollbtn");

        function scrolldown() {
            scrolling.classList.toggle("animbtn");
        }
    </script>

</body>

</html>
