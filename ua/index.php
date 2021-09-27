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
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title></title>

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
        $(document).ready(function() {
            $('.slider_block').bxSlider({
                autoHover: 'true',
                pause: 2500,
                auto: 'true',
                slideMargin: 75,
                minSlides: 1,
                maxSlides: 5,
                moveSlides: 1,
                slideWidth: 211
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
        (function(w, d, s, l, i) {
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

        jQuery(document).ready(function() {
            //2. Получить элемент, к которому необходимо добавить маску
            $(".phone").mask("+38(099) 999-9999");
        });

    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFP4WS9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <img src="assets/img/btn-call.png" id="scrollbtn" alt="" class="btn-call" data-toggle="modal" data-target="#myModal">
        <header>
            <div id="mobile_menu" class="mobile_menu visible-xs visible-sm visible-sm">
                <img class="myNew_img" src="assets/img/sss.png">
                <div class="container">
                    <div class="naw">
                        <div class="naw_li naw_li-sec1">Послуги</div>
                        <div class="naw_li naw_li-sec2">Проблеми та Рішення</div>
                        <div class="naw_li naw_li-sec3">Як ми працюємо</div>
                        <div class="naw_li naw_li-sec6">Відгуки</div>
                        <div class="naw_li naw_li-sec8">F.A.Q.</div>
                    </div>
                    <div class="soc">
                        <span>Стежте за нами</span>
                        <a href="https://www.facebook.com/marketolog2" target="_blank"><img src="assets/img/fb.png" alt=""></a>
                        <a href="https://www.youtube.com/marketer2" target="_blank"><img src="assets/img/yt.png" alt=""></a>
                    </div>
                    <div class="callback">
                        <button data-toggle="modal" data-target="#myModal">Замовити дзвінок</button>
                    </div>
                    <div class="lang">
                        <div class="lang-i">
                            <span>UA</span>
                        </div>
                        <div class="all_lang">
                            <span><a href="https://marketolog2.com/">RU</a></span>
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
                            <span>Стежте за нами</span>
                            <a href="https://www.facebook.com/marketolog2" target="_blank"><img src="assets/img/fb.png" alt=""></a>
                            <a href="https://www.youtube.com/marketer2" target="_blank"><img src="assets/img/yt.png" alt=""></a>
                        </div>
                        <div class="faq">
                            <span class="tofaq">FAQ</span>
                        </div>
                        <div class="callback">
                            <button data-toggle="modal" data-target="#myModal">Замовити дзвінок</button>
                        </div>
                        <div class="lang">
                            <div class="lang-i">
                                <span>UA</span>
                            </div>
                            <div class="all_lang">
                                <span><a href="https://marketolog2.com/">RU</a></span>
                                <span><a href="https://marketolog2.com/en">EN</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <h1>
                        <span>Прибуткове</span> та <span>ефективне</span><br> управління стратегічним <br><span>маркетинг</span>ом компаній від А до Я

                    </h1>
                    <div class="video" data-toggle="modal" data-target="#video1">
                        <img src="assets/img/video_header.png" alt="" class="wow pulse" data-wow-iteration="300">
                        <span>Дивитись відео-привітання</span>
                    </div>
                </div>
            </div>
        </header>
        <section class="sec1 ">
            <div class="container">
                <h2 class="center"><span>Наша</span> експертиза</h2>
                <div class="slider_block">
                    
                    <div class="slide">
                        <div class="popup_block">З чого починати процес інтернет-просування? Яких результатів можете досягти? Ми готові допомагати Вам та Вашому бізнесу від початку і до результатів!</div>
                        <img src="/assets/img/s33.png" alt="">
                        <p>Інтернет-маркетинг <br>"під ключ"</p>
                    </div>
                  

                    <div class="slide">
                        <div class="popup_block">
                            Повноцінне дослідження - ринку, ресурсів, аудиторії Вашого продукту, конкурентів - або ж все разом узяте для успіху майбутньої маркетингової стратегії!
                        </div>
                        <img src="assets/img/s4.png" alt="">
                        <p>Маркетинг<br>АУДИТ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Маєте мету? Обов`язково потрібна стратегія! Індивідуально для Вашого бізнесу, з урахуванням його особливостей, потреб та Ваших бажань!
                        </div>
                        <img class="mt" src="assets/img/s5.png" alt="">
                        <p>Маркетинг<br>стратегія </p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Готові запускати рекламну кампанію? Потрібно впевнитися у правильному плануванні бюджету, та правильним очікуванням від результату! Отримайте достовірний медіа-план зараз!
                        </div>
                        <img src="assets/img/s6.png" alt="">
                        <p>Медіа<br>планування</p>
                    </div>
                    
                    <div class="slide">
                        <div class="popup_block">
                            Повне керування маркетингом Вашої компанії - індивідуально, під ключ, з високим рівнем відповідальності за результат!
                        </div>
                        <img src="assets/img/s8.png" alt="">
                        <p>Маркетинг-директор<br> на аутсорсі</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Маєте нерегулярні завданя, що потребують глибокого розуміння вашого бізнесу та компанії? Готові взяти на підтримку, оточити Ваш бізнес турботою та любов'ю!
                        </div>
                        <img class="mt" src="assets/img/s9.png" alt="">
                        <p>Маркетингова підтримка <br>компаній/проєктів</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Бажаєте інвестувати кошти в новий бізнес? Набагато краще витратити тисячі доларів на маркетингові дослідження, аніж втратити десятки та сотні тисяч на бізнес, що "не злетить"
                        </div>
                        <img src="assets/img/s10.png" alt="">
                        <p>Тестування <br>бізнес-ідеї</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Професійно створюємо впевнене "обличчя" для бренду та бізнесу! Виділяйтесь серед конкурентів, приваблюйте клієнтів, будьте в тренді!
                        </div>
                        <img class="mt" src="assets/img/s11.png" alt="">
                        <p>Професійний <br>(ре)-брендінг</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Маєте сумнів у ефективності Вашої команди маркетологів? Довіряйте перевірку компетенцій професіоналам! Проведемо оцінку та надамо розгорнуті результати та рекомендації!
                        </div>
                        <img src="assets/img/s12.png" alt="">
                        <p>Оцінка компетенцій <br>маркетинг-персоналу</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Маєте ефективну команду - але потребуєте розвитку її компетенцій? Складемо індивідуальні програми розвитку та проконтролюємо результат!
                        </div>
                        <img class="mt" src="assets/img/s13.png" alt="">
                        <p>Корпоративне <br>навчання та розвиток</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="container">
                <h2 class="center"><span>Проблеми</span> та рішення</h2>
                <div class="desc center">Клікніть на проблему, щоб побачити рішення</div>

                <div class="drop_block">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                     Ми хочемо збільшити продажі в нашому бізнесі		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="list">
Так, ми зможемо вам допомогти. Потрібно зануритися в ваш бізнес, операційні процеси і провести якісний аудит. Гарне дослідження дозволить нам уникнути багатьох помилок в роботі <br>
Як правило, багато клієнтів/компаній хочуть просто збільшити продажі - не розуміючи, що збільшення чистого прибутку часто досягається завдяки <b>зменшенню витрат і поліпшенню бізнес-процесів</b> <br>
Досить поширена ситуація, коли бізнес хоче багато нових клієнтів - але бізнес-процеси всередині компанії не готові до такого сплеску - і потік нових клієнтів тільки зашкодить бізнесу. Так чи інакше, зв'яжіться з нами і розкажіть про свою проблему - <b>і ми разом знайдемо вірне рішення</b>	
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
                                     Нашому фахівцю не вдається впоратись з роботою		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Ми розуміємо, це досить поширена ситуація. Чому ви вважаєте, що йому не вдається впоратись? У вас є аналіз конкурентів/ринку/маркетингової стратегії? Як ваш штатний спеціаліст або команда інтегровані в стратегію розвитку вашої компанії/бренду? З чим саме не може впоратись фахівець? Чи достатньо компанії його компетенцій - або просто потрібно правильно їх розподілити? <br>
Як ви вже напевно зрозуміли - <b>потрібно</b> "сідати за стіл переговорів" і <b>розбиратися</b>. Для цього зв'яжіться з нами через цей сайт!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2">
                                     Ми не знаємо - чи правильно поводимося на ринку		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Давайте зануримося в ваші бізнес-процеси, проведемо аналіз конкурентів і спробуємо розібратися разом! Без <b>грамотного аудиту</b> це всього лише гіпотези		
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne3">
                                     Ми хочемо переконатися, що повністю використовуємо всі можливості зростання бізнесу в нашій компанії		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne3" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <div class="list">
Ми зможемо допомогти вам розібратися в цьому питанні тільки після <b>якісного аудиту</b> процесів у вашій компанії. Коли починаємо? Зв'яжіться з нами через сайт!		
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne4">
                                     Ми хочемо збільшити чистий прибуток		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Збільшення чистого прибутку - це <b>комплексна робота</b> над компанією/бізнесом. Найчастіше для цього навіть не потрібно збільшувати продажі або кількість клієнтів - а <b>просто правильно побудувати бізнес-процеси і зменшити марні витрати	</b>	
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne5">
                                     У нас почалися касові розриви		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Це серйозна проблема, яка потребує <b>негайного втручання</b> і серйозного <b>аудиту процесів</b>. Ми готові допомогти!		
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne6">
                                     Вся компанія працює в режимі "ручного управління власником"		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Таке буває досить часто. Як правило це пов'язано з відсутністю якісно побудованих бізнес-процесів. Більш того, така ситуація <b>обмежує бізнес у розвитку</b>. Ми знаємо як допомогти. Зв'яжіться з нами		
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne7">
                                     До нас перестали приходити нові клієнти		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Це питання викликане через необхідність у зростанні - або ви втрачаєте старих клієнтів? Чому клієнти йдуть? Який рівень нових клієнтів буде для вас прийнятним? Що потрібно зробити, щоб все вийшло? <b>Давайте</b> "сідати за стіл переговорів" і <b>розбиратися разом!</b>		
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne8">
                                     Сайт конкурентів краще, тому ми втрачаємо клієнтів		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Швидше за все, це гіпотеза. Але ми розуміємо, що ви можете бути незадоволені станом ваших веб-ресурсів. Для того, щоб спростувати цю гіпотезу або підтвердити її - <b>потрібно</b> провести аудит ваших веб-ресурсів (а раптом щось можна виправити?) - і аудит ресурсів конкурентів, <b>і провести "роботу над помилками"	</b>	
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
                            <div class="t1"><span>Як</span> ми працюємо</div>
                            <div class="t2">На цьому відео засновник компанії "Маркетолог#2"<br> Юрій Буділов детально розповідає про етапи співпраці <br>компанії з бізнес-проєктами</div>
                        </div>
                        <div class="video" data-toggle="modal" data-target="#video2">
                            <img src="assets/img/video_header.png" alt="" class="wow pulse" data-wow-iteration="300">
                            <span>Дивитись відео про етапи роботи </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container">
                <h2 class="center"><span>Етапи </span>нашої співпраці</h2>
                <div class="hidden-sm">
                    <div class="block">
                        <div class="item mob_bef wow fadeIn" data-wow-delay="0.1s">
                            <img src="assets/img/s41.png" alt="">
                            <p><b>Знайомство</b> <br>з проєктом, компанією, бізнесом</p>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay="0.3s">
                            <img src="assets/img/s42.png" alt="">
                            <p><b>Консультація -</b><br> дослідження проблеми,<br> завдання</p>
                        </div>
                        <div class="item mob_bef wow fadeIn" data-wow-delay="0.5s">
                            <img src="assets/img/s43.png" alt="">
                            <p><b>Маркетинг-аудит -</b><br>проєкту,<br> процесів, компанії</p>
                        </div>
                        <div class="item sr wow fadeIn" data-wow-delay="0.7s">
                            <img src="assets/img/s44.png" alt="">
                            <p><b>Стратегія -</b><br>опрацювання<br> "RoadMap" до дрібниць</p>
                        </div>
                    </div>
                    <div class="block">
                        <div class="item bleft mob_4 wow fadeIn" data-wow-delay="1.5s">
                            <img src="assets/img/s45.png" alt="">
                            <p><b>Пост-підтримка -</b> щоб результат<br>залишався стабільним!</p>
                        </div>
                        <div class="item bleft mob_bef mob_3 wow fadeIn" data-wow-delay="1.3s">
                            <img src="assets/img/s46.png" alt="">
                            <p><b>Фіксуємо результат!</b><br>- із гарантією<br> виконання</p>
                        </div>
                        <div class="item bleft mob_2 wow fadeIn" data-wow-delay="1.1s">
                            <img src="assets/img/s47.png" alt="">
                            <p><b>Управління проєктами - </b> із зануренням<br> "під ключ"</p>
                        </div>
                        <div class="item sl mob_bef mob_1 wow fadeIn" data-wow-delay="0.9s">
                            <img src="assets/img/s48.png" alt="">
                            <p><b>Планування - </b> результатів,<br> постановка цілей</p>
                        </div>
                    </div>
                </div>
                <div class="visible-sm">
                    <div class="block justcen">
                        <div class="item mob_bef mob_1 tabl_bef wow fadeIn" data-wow-delay="0.1s">
                            <img src="assets/img/s41.png" alt="">
                            <p><b>Знайомство</b> <br>з проєктом, компанією, бізнесом</p>
                        </div>
                        <div class="item mob_2 tabl_bef wow fadeIn" data-wow-delay="0.3s">
                            <img src="assets/img/s42.png" alt="">
                            <p><b>Консультація -</b><br> дослідження проблеми,<br> завдання</p>
                        </div>
                        <div class="item mob_bef mob_3 wow fadeIn" data-wow-delay="0.5s">
                            <img src="assets/img/s43.png" alt="">
                            <p><b>Маркетинг-аудит -</b><br>проєкту,<br> процесів, компанії</p>
                        </div>
                        <div class="item sr mob_4 tabl_bef wow fadeIn" data-wow-delay="0.7s">
                            <img src="assets/img/s44.png" alt="">
                            <p><b>Стратегія -</b><br>опрацювання<br> "RoadMap" до дрібниць</p>
                        </div>

                        <div class="item bleft mob_8 wow fadeIn" data-wow-delay="1.5s">
                            <img src="assets/img/s45.png" alt="">
                            <p><b>Пост-підтримка -</b> щоб результат<br>залишався стабільним!</p>
                        </div>
                        <div class="item bleft mob_bef mob_7 tabl_bef wow fadeIn" data-wow-delay="1.3s">
                            <img src="assets/img/s46.png" alt="">
                            <p><b>Фіксуємо результат!</b><br>- із гарантією<br> виконання</p>
                        </div>
                        <div class="item bleft mob_6 wow fadeIn" data-wow-delay="1.1s">
                            <img src="assets/img/s47.png" alt="">
                            <p><b>Управління проєктами - </b> із зануренням<br> "під ключ"</p>
                        </div>
                        <div class="item sl mob_bef mob_5 tabl_bef wow fadeIn" data-wow-delay="0.9s">
                            <img src="assets/img/s48.png" alt="">
                            <p><b>Планування - </b> результатів,<br> постановка цілей</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec5">
            <div class="container">
                <h2 class="center"><span>Тепер те ж саме,</span> тільки у цифрах</h2>
                <div class="block">
                    <div class="item">
                        <div class="t1 it1 rotateIn wow" data-wow-duration="1s" data-wow-delay="1s">

                        </div>
                        <span>14+</span>
                        <div class="t2">
                            Років досвіду у сфері маркетингу
                        </div>
                    </div>
                    <div class="item">
                        <div class="t1 it2 rotateIn wow" data-wow-duration="1s" data-wow-delay="2s">

                        </div>
                        <span>149+</span>
                        <div class="t2">
                            Інструментів для бізнесу
                        </div>
                    </div>
                    <div class="item">
                        <div class="t1 it3 rotateIn wow" data-wow-duration="1s" data-wow-delay="3s">

                        </div>
                        <span>250+</span>
                        <div class="t2">
                            Реалізованих проєктів
                        </div>
                    </div>
                </div>

                <div class="form_block">
                    <div class="t1">
                        Подайте запит прямо зараз та скористайтеся спеціальною пропозицією!
                    </div>
                    <div class="t2">
                        Індивідуальна зустріч-консультація з експертом, для оптимізації маркетинг-процесів у Вашому бізнесі
                    </div>

                    <div class="form">
                        <form action="sender.php" method="post">
                            <div class="inpb">
                                <input class="name" name="name" type="text" placeholder="Ваше ім`я">
                            </div>
                            <div class="inpb">
                                <input class="phone" name="phone" type="text" placeholder="Ваш телефон*" required>
                            </div>
                            <div class="inpb">
                                <input class="email" name="post" type="text" placeholder="example@mail.com">
                            </div>
                            <div class="inpbutton">
                                <button type="button" class="send">Надіслати запит</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </section>
        <section class="sec6">
            <div class="container">
                <h2 class="center"><span>Відгуки</span> про співпрацю із нами</h2>
                <div class="block">
                    <div class="slider2">
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s61.png" alt="">
                            </div>
                            <p>
                                <b> Єлізавета Шепетільнікова</b><br>
                                Знайомі з компанією "Маркетолог#2" вже декілька років і працюємо в різних проектних напрямках: від організації та проведення тренінгів для ТОП-керівників нашої організації до проектного супроводу наших заходів, створення нового сайту, розвитку проектів в соціальних мережах та багатьох інших завдань. Тож сміливо рекомендую ""Маркетолог#2"" до спрівпраці, адже вони дійсно є майстрами своєї справи
                            </p>
                            <a href="https://www.facebook.com/lissashch" target="_blank">Senior Adviser/EdUSA Ukraine</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s62.png" alt="">
                            </div>
                            <p>
                                <b>Денис Чернобаєв</b> <br>
                                Я особисто знав їх ще відтоді, відколи вони були маленькою веб-студією в Одесі - і дуже довго, років зо три, не наважувався звернутися за допомогою. Коли ти підприємець, то завжди намагаєшся все зробити та "витягнути" на собі. Тільки зараз розумію, як раніше помилявся. Буквально за декілька місяців ми зробили значний прорив: провели ребрендінг, розробили та почали впроваджувати стратегію розвитку. Ми готуємо до запуску цілу низку активностей в інтернет-рекламі, друкуємо поліграфію та брендований мерч для наших клієнтів. Загалом, все вирує! До речі, якщо знадобиться відео для бізнесу, звертайтесь - ми охоче допоможемо! :-)
                            </p>
                            <a href="https://www.facebook.com/tiberianSunny" target="_blank">Bona Idea Production / Owner</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s63.jpg" alt="">
                            </div>
                            <p>
                                <b>Вадим Керничий</b><br>
                                Познайомилися з компанією випадково: дружина шукала щось на YouTube та натрапила на канал компанії "Маркетолог#2". Переглянули декілька відео і зрозуміли, що дуже мало розуміємо в маркетингу, тому вирішили зв'язатися для консультації. Наш проєкт тривав 5 місяців. Не дивлячись на те, що за весь період роботи безпосередньо з командою ""Маркетолог#2"" ми бачилися всього 1 раз, - всі завдання для розвитку проєкту були виконані точно та у визначені терміни. Окреме ""Дякую"" варто сказати за те, що команда "штовхає" замовника, коли той забуває щось зробити зі свого боку
                            </p>
                            <b>BORO / Founder</b>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s64.png" alt="">
                            </div>
                            <p>
                                <b>Віктор Войцеховський</b><br>
                                Ми лише захотіли знайти маркетолога в компанію. А знайшли команду, котра перевернула наше уявлення про Маркетинг догори дриґом. Найскладнішим було почати довіряти їм на всі 100% - ми впорались за два місяці. Нажаль, не в перший день, - тоді результати були б раніше! Зараз, після завершення 5-місячного контракту, ми підписали подовження договору ще на 5 місяців. Наш бізнес росте, ми оновлюємо команду, переїхали до нового красивого офісу та з дня на день продовжуємо оптимізувати бізнес-процеси. Дуже дякую за дружбу та ефективну співпрацю!
                            </p>
                            <a href="https://www.facebook.com/viktor.voytsekhovskiy" target="_blank">LASTICK / Засновник, власник</a>
                        </div>

                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s67.png" alt="">
                            </div>
                            <p>
                                <b>Максим Пасинок</b><br>
                                Команда швидко занурилась всередину компанії, глибоко дослідила всі бізнес-процеси, розробила маркетинг-стратегію. Ми знімали відео про компанію, працювали з усіма потрібними видами реклами, та навіть реструктурували відділ продажу. Завдяки цьому у нас підвищився рівень повернень клієнтів, ми відкрили новий роздрібний магазин. З нами навіть почала співпрацювати велика компанія у сегменті В2В. Раніше ми взагалі не розуміли, що таке Маркетинг, але це змінилось після знайомства з командою "Маркетолог#2"
                            </p>
                            <a href="https://www.facebook.com/maxim.konors" target="_blank">KONORS / Co-owner</a>
                        </div>
                    </div>
                </div>
                <div class="button_block">
                    <button data-toggle="modal" data-target="#videoall"><span>Переглянути відео-відгуки</span> <img src="assets/img/mini_play.png" alt=""></button>
                </div>
            </div>
        </section>
        <section class="sec7">
            <div class="container">
                <h2 class="center"><span>Наші</span> друзі, клієнти та партнери</h2>

                <div class="block">
                    <div class="slider3 center">
                        <div class="slideblock1">
                            <div class="slide"><img src="assets/img/partners/1.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/2.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/3.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/4.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/5.jpg" alt=""></div>
                            <div class="slide"><img style="max-width: 100%;
    max-height: 100%;" src="assets/img/partners/6.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/7.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/8.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/9.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/10.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/11.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/12.jfif" alt=""></div>
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
                            <div class="slide"><img src="assets/img/partners/26.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/27.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/28.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/29.jfif" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/30.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/31.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/32.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/33.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/34.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/35.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/36.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/38.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/39.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/40.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/41.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/42.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/43.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/44.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/45.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/46.jfif" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/47.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/48.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/49.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/50.jpg" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="sec8">
            <div class="container">
                <h2 class="center"><span>Поширенні</span> запитання</h2>
                <div class="desc hidden-xs hidden-sm hidden-md center">Клікайте ліворуч на запитання - прочитайте відповідь праворуч!</div>
                <div class="desc visible-xs visible-sm visible-md center">Клікайте на запитання і прочитайте відповідь!</div>

                <div class="block">
                    <div class="left_b">
                        <div class="list ls1">
                            <span>Ви займаєтесь рекламою чи розвитком бізнесу у соціальних мережах?</span>
                            <div class="contmobblock coco1 hidden-lg">
                                <p>Нажаль, у реальному світі через велику кількість ""гуру інфобізнесу"", багато понять та термінів часто плутають із домислами</p>
                                <p>Управління маркетингом - це побудова бізнес-процесів, Promotion (просування бренду/продукту) - частина маркетингу, а реклама - частина процесу просування</p>
                                <p>Разом із власниками/інвесторами ми вибудовуємо бізнес-процеси, звісно, включаючи вирішення питань позиціонування, просування та реклами</p>
                                <p>Якщо по порядку - то це: маркетинг-аудит, узгодження концепції розвитку, узгодження стратегії, розробка бюджету та активні дії. Проте, все може відрізнятися в залежності від особливостей та завдань Вашого бізнесу</p>
                            </div>
                        </div>
                        <div class="list ls2"><span>Можете допомогти з рекламою в інтернеті?</span>
                            <div class="contmobblock coco2 hidden-lg">
                                <p>У нас великий досвід роботи з проєктами у низці інтернет-реклами: від створення концепції майбутнього сайту - до реалізації маркетинг-стратегій онлайн для будь-якої аудиторії - на сьогоднішній день це близько 180 проєктів</p>
                                <p>Проте, ми - НЕ агенство інтернет-реклами, котре виконує завдання на аутсорсі. Орієнтуючись на створену та узгоджену із Замовником стратегію, ми допомагаємо оцінити спеціалістів при наймі до штату. Якщо компанія не має необхідності у штатному працівнику, ми залучаємо відповідних людей на аутсорсі, і навіть будуємо правильну взаємодію з агенствами. Більше того - ми можемо організувати у Вашому офісі цілу міні-студію для зйомки відео на YouTube. Одним словом - були б задачі - а як їх виконати - це вже наш клопіт</p>

                            </div>
                        </div>
                        <div class="list ls3"><span>Скільки коштує ваша робота?</span>
                            <div class="contmobblock coco3 hidden-lg">
                                <p>Бюджет - річ відносна. Все залежить від кількості та об'єму завдань і рівня відповідальності, котрий лежатиме на нашій компанії</p>
                                <p>Ми працюємо з проєктами тривалістю від 3 місяців та вартістю від 1000$ за проєкт, але повірте, ці цифри вам не скажуть майже нічого. Максимальна вартість проєкту (із яким ми працювали на цей момент), довжиною у декілька місяців оцінювалась у $120.000</p>
                                <p>Так, змінних даних багато, але можна оплачувати за кожен окремий етап. І ще багато іншого</p>
                                <p>Можливо, краще спілкуватися особисто та дізнатися про все детальніше?</p>
                            </div>
                        </div>
                        <div class="list ls4"><span>Яку кількість проєктів ви вже виконали? </span>
                            <div class="contmobblock coco4 hidden-lg">
                                <p>Про це вже було сказано - проте скажемо ще раз: сьогодні за нашими плечима більш як 180 маркетинг-проєктів у інтернет-рекламі та близько 40 компаній, котрим ми допомагали налаштовувати бізнес-процеси "під ключ"</p>
                                <p>З одного боку - кожен бізнес працює за приблизно однаковими моделями росту та розвитку. З іншого - кожен бізнес потребує свого, індивідуального підходу</p>
                                <p>Поєднуючи ці два фактори разом із психологією змін для Власників, ми отримуємо чудові результати для наших клієнтів!</p>
                            </div>
                        </div>
                        <div class="list ls5"><span>Мені не потрібні штатні працівники - як бути? </span>
                            <div class="contmobblock coco5 hidden-lg">
                                <p>Умови нашої майбутньої співпраці залежатимуть від вихідних даних, котрі ми отримаємо від Власника/Замовника на початку проекту</p>
                                <p>Не потрібні штатні працівники - значить не потрібні.</p>
                                <p>Працювати з працівниками на віддаленій роботі/фрілансерами - страх багатьох маркетологів та маркетинг-директорів. Наша перевага - навички та досвід ефективної побудови саме такої роботи. Можете назвати це нашою "професійною родзинкою", добре?)</p>
                            </div>
                        </div>
                        <div class="list ls6"><span>Як давно існує ваша компанія? </span>
                            <div class="contmobblock coco6 hidden-lg">
                                <p>Під назвою "Маркетолог#2" ми працюємо більше двох років. Проте загальний досвід у сфері маркетингу та налаштуванні бізнес-процесів складає більше 12 років.</p>
                                <p>Наш практичний досвід дуже різний, проте досатньо глибокий: івент-бізнес, BTL (промоакції), FMCG рітейл та побудова комбінованих бізнес-систем, огранізація бізнесу в напрямку спорту, туризму, прокату спортивного спорядження та екстрим-відпочинку, і навіть - досвід роботи як агенства інтернет-реклами,та ще багато прикладів</p>
                                <p>Попри все, повірте: ми поглянемо на Ваш бізнес індивідуально, з нового початку</p>

                            </div>
                        </div>
                        <div class="list ls7"><span>Нам потрібно провести ребрендінг</span>
                            <div class="contmobblock coco7 hidden-lg">
                                <p>Охоче допоможемо. Розробимо концепцію бренду, залучимо кращих дизайнерів (принаймні тих, хто відповідатиме бюджету), та у буквальному сенсі дамо Нове Життя пизиціонуванню Вашої компанії.</p>
                                <p>Звісно, така робота ще буде складатися зі створення фірмового стилю для усіх Точок Контакту Вашої компанії з аудиторією - відповідно, все буде виглядати професійно</p>
                                <p>Ми обожнюємо деталі: лаконічні форми, правильно підібрані кольори (що несуть правильний сенс), шрифти та ішні дрібниці. Диявол у дрібницях, чули таку фразу?</p>
                            </div>
                        </div>
                        <div class="list ls8"><span>Нам терміново потрібен сайт</span>
                            <div class="contmobblock coco8 hidden-lg">
                                <p>Ви маєте два варіанти.</p>
                                <p>Перший - звернутися до першої-ліпшої веб-студії - вони охоче допоможуть Вам загасити будь-яку пожежу за Ваші гроші</p>
                                <p>Другий - усвідомити те, що сайт - це складний структурований механізм, через який потрібно пропустити цінності компанії, її продукти та зручність отримання інформації клієнтом. Також сайт повинен відповідати значній кількості вимог - про які Вам навряд чи розкажуть студії, з багатьох причин. Якщо ви вирішили підійти до цього процесу свідомо - на перший час краще буде зробити сайт-заглушку або сайт-візитну картку - та пройти весь шлях правильно: аудит компанії, стратегія, цінності, продукти, диференціація від ринку - і тільки потім "запакувати" веб-презентованість. Ми працюємо саме за таким варіантом, оскільки несемо відповідальність за результати</p>
                            </div>
                        </div>
                        <div class="list ls9 active"><span>Чи є щось, чим ви не займаєтесь?</span>
                            <div style="display:block;" class="contmobblock coco9 hidden-lg">
                                <p>Провокаційне запитання)</p>
                                <p>Наша спеціалізація - Управління Маркетингом, наше завдання - Керувати Процесами, а не "робити вручну". Певна річ, залучивши спеціалістів та підрядників, ми виконаємо майже будь-яке завдання. АЛЕ, якщо стається так, що завдання Вашого бізнесу будуть знаходитися поза зоною нашої компетенції, - ми чесно зізнаємося у цьому та намагатимемося рекомендувати надійних та перевірених підрядників для вас</p>
                                <p>Принпиц простий: або виконуй свою роботу якнайкраще, або не виконуй взагалі</p>
                            </div>
                        </div>

                    </div>
                    <div class="right_b">
                        <div class="cont_block">
                            <p>Нажаль, у реальному світі через велику кількість ""гуру інфобізнесу"", багато понять та термінів часто плутають із домислами</p>
                            <p>Управління маркетингом - це побудова бізнес-процесів, Promotion (просування бренду/продукту) - частина маркетингу, а реклама - частина процесу просування</p>
                            <p>Разом із власниками/інвесторами ми вибудовуємо бізнес-процеси, звісно, включаючи вирішення питань позиціонування, просування та реклами</p>
                            <p>Якщо по порядку - то це: маркетинг-аудит, узгодження концепції розвитку, узгодження стратегії, розробка бюджету та активні дії. Проте, все може відрізнятися в залежності від особливостей та завдань Вашого бізнесу</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="block hidden-sm hidden-md">
                    <div class="logo">
                        <a href="">
                            <img src="assets/img/logofooter.png" alt="">
                        </a>
                    </div>
                    <div class="urik">
                        <a href="https://www.akingump.com/en/" target="_blank">Юридична підтримка</a>
                    </div>
                    <div class="cont">
                        <a href="https://goo.gl/maps/FPF6NitkMHnWtP5J6" target="_blank"><img src="assets/img/m1.png" alt=""><span>04116, м.Київ, <br/> пров.Тбіліський 4/10</span></a>
                        <a href="mailto:office@marketolog2.com"><img src="assets/img/m2.png" alt=""><span>office@marketolog2.com</span></a>
                    </div>
                    <div class="soc">
                        <a href="https://www.facebook.com/marketolog2" target="_blank">
                            <img src="assets/img/ffb.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/marketer2" target="_blank">
                            <img src="assets/img/fyt.png" alt="">
                        </a>
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
                            <a href="https://www.akingump.com/en/" target="_blank">Юридична підтримка</a>
                        </div>
                    </div>
                    <div class="dflexx my2flex">
                        <div class="cont">
                        <a href="https://goo.gl/maps/j2Y12S2fDWdz6S5M9" target="_blank"><img src="assets/img/m1.png" alt=""><span>04116, м.Київ, <br/> пров.Тбіліський 4/10</span></a>
                        <a href="mailto:office@marketolog2.com"><img src="assets/img/m2.png" alt=""><span>office@marketolog2.com</span></a>
                    </div>
                        <div class="soc">
                            <a href="https://www.facebook.com/marketolog2" target="_blank">
                                <img src="assets/img/ffb.png" alt="">
                            </a>
                            <a href="https://www.youtube.com/marketer2" target="_blank">
                                <img src="assets/img/fyt.png" alt="">
                            </a>
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
                        Подайте заявку зараз <br>
                        та отримайте <span>спеціальну</span> <br> пропозицію!
                    </h4>
                </div>
                <div class="modal_body">
                    <div class="subtitle center">
                        Індивідуальна зустріч-консультація <br> з експертом, з метою оптимізації <br> маркетинг-процесів у Вашому бізнесі
                    </div>

                    <div class="form">
                        <form action="sender.php" method="post">
                            <div class="inpb">
                                <input class="name" name="name" type="text" placeholder="Ваше ім`я">
                            </div>
                            <div class="inpb">
                                <input class="phone" name="phone" type="text" placeholder="Ваш телефон*" required>
                            </div>
                            <div class="inpb">
                                <input class="email" name="post" type="text" placeholder="Ваш E-mail">
                            </div>
                            <div class="inpbutton">
                                <button type="button" class="send">Надіслати запит</button>
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
                        Дякуємо за Вашу активність! Ми зв’яжемось із Вами найближчим часом!
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
        $('#video1').on('show.bs.modal', function(e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/XeUZVT6cA-g?autoplay=1');
        });
        $('#video1').on('hidden.bs.modal', function(e) {
            $(this).find('.video1').attr('src', '');
        });
        $('#video2').on('show.bs.modal', function(e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/EnZVVgTsrsI?autoplay=1');
        });
        $('#video2').on('hidden.bs.modal', function(e) {
            $(this).find('.video1').attr('src', '');
        });
        $('#videoall').on('show.bs.modal', function(e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/PH9GEu_d_jM?autoplay=1');
        });
        $('#videoall').on('hidden.bs.modal', function(e) {
            $(this).find('.video1').attr('src', '');
        });

        var burgerCtr = document.querySelector("#burger-menu");
        var menuCtr = document.querySelector("#mobile_menu");
        burgerCtr.addEventListener("click", function() {
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
