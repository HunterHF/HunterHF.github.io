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
                        <div class="naw_li naw_li-sec1">Services</div>
                        <div class="naw_li naw_li-sec2">Problems and Solutions</div>
                        <div class="naw_li naw_li-sec3">How we are working</div>
                        <div class="naw_li naw_li-sec6">Reviews</div>
                        <div class="naw_li naw_li-sec8">F.A.Q.</div>
                    </div>
                    <div class="soc">
                        <span>Follow us</span>
                        <a href="https://www.facebook.com/marketolog2" target="_blank"><img src="assets/img/fb.png" alt=""></a>
                        <a href="https://www.youtube.com/marketer2" target="_blank"><img src="assets/img/yt.png" alt=""></a>
                    </div>
                    <div class="callback">
                        <button data-toggle="modal" data-target="#myModal">Request a call</button>
                    </div>
                    <div class="lang">
                        <div class="lang-i">
                            <span>EN</span>
                        </div>
                        <div class="all_lang">
                            <span><a href="https://marketolog2.com/ua">UA</a></span>
                            <span><a href="https://marketolog2.com/">RU</a></span>
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
                                <img src="assets/img/logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right_b">
                        <div class="soc">
                            <span>Follow us</span>
                            <a href="https://www.facebook.com/marketolog2" target="_blank"><img src="assets/img/fb.png" alt=""></a>
                            <a href="https://www.youtube.com/marketer2" target="_blank"><img src="assets/img/yt.png" alt=""></a>
                        </div>
                        <div class="faq">
                            <span class="tofaq">FAQ</span>
                        </div>
                        <div class="callback">
                            <button data-toggle="modal" data-target="#myModal">Request a call</button>
                        </div>
                        <div class="lang">
                            <div class="lang-i">
                                <span>EN</span>
                            </div>
                            <div class="all_lang">
                                <span><a href="https://marketolog2.com/ua">UA</a></span>
                                <span><a href="https://marketolog2.com/">RU</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <h1>
                        <span>Profitable</span> and <span>effective</span> <br> management of strategic <br><span>marketing</span> of companies from A to Z
                    </h1>
                    <div class="video" data-toggle="modal" data-target="#video1">
                        <img src="assets/img/video_header.png" alt="" class="wow pulse" data-wow-iteration="300">
                        <span>Watch the welcome-video</span>
                    </div>
                </div>
            </div>
        </header>
        <section class="sec1 ">
            <div class="container">
                <h2 class="center"><span>Our</span> expertise</h2>
                <div class="slider_block">
                    
                    <div class="slide">
                        <div class="popup_block">Where to start the process of Internet promotion? What results can you achieve? We are ready to help you and your business from the beginning to the results!</div>
                        <img src="/assets/img/s33.png" alt="">
                        <p>Internet-marketing on <br>a turn-key basis</p>
                    </div>
                   
                    <div class="slide">
                        <div class="popup_block">
                            Full investigation of the market, resources, target audience of your product, competitors or all together for the future success of the marketing strategy
                        </div>
                        <img src="assets/img/s4.png" alt="">
                        <p>Marketing <br>Audit</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Do you have a goal? It means that a strategy is necessary. It should be individual for your business, taking into account its special features, needs, as well as your wihes
                        </div>
                        <img class="mt" src="assets/img/s5.png" alt="">
                        <p>Marketing <br>Strategy </p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Are you ready to launch the advertising campaign? It is necessary to assure in the correct planning of your budget and right expectations from the result. Receive a competent media plan right now
                        </div>
                        <img src="assets/img/s6.png" alt="">
                        <p>Media <br>Planning</p>
                    </div>
                    
                    <div class="slide">
                        <div class="popup_block">
                            We propose full, individual, on a turn-key basis marketing management of your company with a great share of responsibility
                        </div>
                        <img src="assets/img/s8.png" alt="">
                        <p>Outsourcing <br> Marketing Director</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Do you have any non-regular tasks requring a deep understanding of your business and company? We are ready to support, give the care and surround with love your business
                        </div>
                        <img class="mt" src="assets/img/s9.png" alt="">
                        <p>Marketing Support <br>of Companies / Projects</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Are you thinking about investing money in a new business? It's much better to spend thousands of dollars on marketing investigation rather than spend tens and hundreds thousands on business that will not succeed
                        </div>
                        <img src="assets/img/s10.png" alt="">
                        <p>Business <br>Idea Testing</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            We create a confident brand "face" for business professionally. Stand out from your competitors, attract clients, be in trend
                        </div>
                        <img class="mt" src="assets/img/s11.png" alt="">
                        <p>Profesional <br>(Re)-branding</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Do you have doubts in effectiveness of your team of marketers? Trust competence assessment to professionals. We will carry out an assessment and present detailed results and recommendations
                        </div>
                        <img src="assets/img/s12.png" alt="">
                        <p>Competency Assessment <br>of Marketing Staff</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Is there an effective team which requires its competence development? We will prepare individual development programs and control the following results
                        </div>
                        <img class="mt" src="assets/img/s13.png" alt="">
                        <p>Corporate <br>Training and Development</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="container">
                <h2 class="center"><span>Problems</span> and Solutions</h2>
                <div class="desc center">Click on the problem to see its solution</div>

                <div class="drop_block">
                    <div class="panel-group" id="accordion">
                        
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        We want to increase sales in our business		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="list">
Yes, we can help you. We will need to immerse ourselves in your business, operational processes and conduct a high-quality audit. Good research will allow us to avoid many mistakes in the work. <br>
As a rule, many clients/companies simply want to increase sales - not realizing that an increase in net profit can often be achieved by <b>reducing costs</b> and <b>improving business processes</b> <br>
Quite a frequent situation when a business wants a lot of new customers - but the business processes within the company are not ready for such a surge - and the flow of new customers will only harm the business. Anyway, contact us and tell us about your problem - and together <b>we will find the right solution</b>		
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
                                        Our in-house specialist does not cope with work		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
We understand this is a fairly common situation. Why do you think he is failing? Do you have a competitor / market analysis / marketing strategy? How is your in-house specialist or team integrated into your company's / brand development strategy? ? Is his competence enough for the company - or does it just need to be properly distributed? <br>
As you've probably already understood, you <b>need</b> to "sit down at the negotiating table" and <b>sort it out</b>. To do this, contact us through this website!		
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2">
                                        We do not know if we are running correctly in the market
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Let's dive into your business processes, analyze your competitors and try to figure it out together! Without a competent audit, these are just hypotheses.		
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne3">
                                        We want to make sure, if we use all the opportunities for business growth in our company to the full		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
We can help you understand this issue after a conducting of <b>high-quality audit</b> of the processes in your company. When do we start? Contact us through the website!		
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne4">
                                        We want to increase net profit		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
Increasing net profit is a complex work on a company/business. Often, this does not even require increasing sales or the number of customers, but simply <b>building business processes correctly</b> and <b>reducing unnecessary costs</b>.		
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne5">
                                        We started box office gaps		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
This is a serious problem, that requires <b>immediate attention</b> and serious <b>process auditing</b>. We are ready to help!		
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne6">
                                       The whole company operates in the mode of "manual control by the owner"		 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
This happens quite often. As a rule, this is due to the lack of well-built business processes. Moreover, this situation <b>limits business development</b>. We know how to help. Contact us		
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne7">
                                        New clients stopped coming to us		
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
This question is driven by the need for growth - or are your old customers leaving? Why do customers leave? What level of new clients will be acceptable for you? What needs to be done to make it work? <b>Let's</b> "sit down at the negotiating table" and <b>sort it out together!</b>		
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne8">
                                       Competitors' website is better, so we lose customers		 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">
This is most likely a hypothesis. But we understand that you may be unhappy with the state of your web resources. In order to refute this hypothesis or confirm it, you need to audit your web resources (if something can be corrected?) - and audit the resources of competitors, and <b>carry out error analysis</b>		
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
                            <div class="t1"><span>How</span> do we work?</div>
                            <div class="t2">In this video, Yuri Budilov, founder of Marketer#2, <br> describes in detail about the stages of cooperation between<br> the company and business projects</div>
                        </div>
                        <div class="video" data-toggle="modal" data-target="#video2">
                            <img src="assets/img/video_header.png" alt="" class="wow pulse" data-wow-iteration="300">
                            <span>Watch the video on the stages of work </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container">
                <h2 class="center"><span>Stages </span>of our cooperation</h2>
                <div class="hidden-sm">
                    <div class="block">
                        <div class="item mob_bef wow fadeIn" data-wow-delay="0.1s">
                            <img src="assets/img/s41.png" alt="">
                            <p><b>Acquaintance </b><br>with a project, a company and a business</p>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay="0.3s">
                            <img src="assets/img/s42.png" alt="">
                            <p><b>Consultation - </b><br>investigation of <br>a problem, tasks</p>
                        </div>
                        <div class="item mob_bef wow fadeIn" data-wow-delay="0.5s">
                            <img src="assets/img/s43.png" alt="">
                            <p><b>Marketing audit </b><br>of a project,<br> processes of a company</p>
                        </div>
                        <div class="item sr wow fadeIn" data-wow-delay="0.7s">
                            <img src="assets/img/s44.png" alt="">
                            <p><b>Strategy - </b><br>working out<br> "Road Map" in detail</p>
                        </div>
                    </div>
                    <div class="block">
                        <div class="item bleft mob_4 wow fadeIn" data-wow-delay="1.5s">
                            <img src="assets/img/s45.png" alt="">
                            <p><b>Post support</b> to sustain <br>stable result</p>
                        </div>
                        <div class="item bleft mob_bef mob_3 wow fadeIn" data-wow-delay="1.3s">
                            <img src="assets/img/s46.png" alt="">
                            <p><b>Fix the result </b><br>with guarantee<br> of performance</p>
                        </div>
                        <div class="item bleft mob_2 wow fadeIn" data-wow-delay="1.1s">
                            <img src="assets/img/s47.png" alt="">
                            <p><b>Project Management</b> with involvement<br> on a turn-key basis</p>
                        </div>
                        <div class="item sl mob_bef mob_1 wow fadeIn" data-wow-delay="0.9s">
                            <img src="assets/img/s48.png" alt="">
                            <p><b>Planning</b> of results,<br> setting goals</p>
                        </div>
                    </div>
                </div>
                <div class="visible-sm">
                    <div class="block justcen">
                        <div class="item mob_bef mob_1 tabl_bef wow fadeIn" data-wow-delay="0.1s">
                            <img src="assets/img/s41.png" alt="">
                            <p><b>Acquaintance </b><br>with a project, a company and a business</p>
                        </div>
                        <div class="item mob_2 tabl_bef wow fadeIn" data-wow-delay="0.3s">
                            <img src="assets/img/s42.png" alt="">
                            <p><b>Consultation - </b><br>investigation of <br>a problem, tasks</p>
                        </div>
                        <div class="item mob_bef mob_3 wow fadeIn" data-wow-delay="0.5s">
                            <img src="assets/img/s43.png" alt="">
                            <p><b>Marketing audit </b><br>of a project,<br> processes of a company</p>
                        </div>
                        <div class="item sr mob_4 tabl_bef wow fadeIn" data-wow-delay="0.7s">
                            <img src="assets/img/s44.png" alt="">
                            <p><b>Strategy - </b><br>working out<br> "Road Map" in detail</p>
                        </div>

                        <div class="item bleft mob_8 wow fadeIn" data-wow-delay="1.5s">
                            <img src="assets/img/s45.png" alt="">
                            <p><b>Post support</b> to sustain <br>stable result</p>
                        </div>
                        <div class="item bleft mob_bef mob_7 tabl_bef wow fadeIn" data-wow-delay="1.3s">
                            <img src="assets/img/s46.png" alt="">
                            <p><b>Fix the result </b><br>with guarantee<br> of performance</p>
                        </div>
                        <div class="item bleft mob_6 wow fadeIn" data-wow-delay="1.1s">
                            <img src="assets/img/s47.png" alt="">
                            <p><b>Project Management </b> with involvement<br> on a turn-key basis</p>
                        </div>
                        <div class="item sl mob_bef mob_5 tabl_bef wow fadeIn" data-wow-delay="0.9s">
                            <img src="assets/img/s48.png" alt="">
                            <p><b>Planning </b> of results,<br> setting goals</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec5">
            <div class="container">
                <h2 class="center"><span>Now the same things,</span> but in figures</h2>
                <div class="block">
                    <div class="item">
                        <div class="t1 it1 rotateIn wow" data-wow-duration="1s" data-wow-delay="1s">

                        </div>
                        <span>14+</span>
                        <div class="t2">
                            Years of marketing experience
                        </div>
                    </div>
                    <div class="item">
                        <div class="t1 it2 rotateIn wow" data-wow-duration="1s" data-wow-delay="2s">

                        </div>
                        <span>149+</span>
                        <div class="t2">
                            Business instruments
                        </div>
                    </div>
                    <div class="item">
                        <div class="t1 it3 rotateIn wow" data-wow-duration="1s" data-wow-delay="3s">

                        </div>
                        <span>250+</span>
                        <div class="t2">
                            Realized projects
                        </div>
                    </div>
                </div>

                <div class="form_block">
                    <div class="t1">
                        Apply now and get a special offer
                    </div>
                    <div class="t2">
                        Individual meeting-consultation with an expert in order to optimize marketing processes in your business
                    </div>

                    <div class="form">
                        <form action="sender.php" method="post">
                            <div class="inpb">
                                <input class="name" name="name" type="text" placeholder="Your name">
                            </div>
                            <div class="inpb">
                                <input class="phone" name="phone" type="text" placeholder="Your phone number*" required>
                            </div>
                            <div class="inpb">
                                <input class="email" name="post" type="text" placeholder="example@mail.com">
                            </div>
                            <div class="inpbutton">
                                <button type="button" class="send">Send request</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </section>
        <section class="sec6">
            <div class="container">
                <h2 class="center"><span>Reviews </span>about our work</h2>
                <div class="block">
                    <div class="slider2">
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s61.png" alt="">
                            </div>
                            <p>
                                <b> Elizaveta Shchepetilnikova</b><br>
                                Senior Adviser EdUSA Ukraine. We have known the company “Marketer#2” for several years and have been cooperating in various project areas, from organizing and conducting trainings for the top managers of our organization to project support of our events, creating a new website, developing projects in social networks and many other tasks. Therefore, I boldly recommend "Marketer#2" to cooperation as they are really good at what they do
                            </p>
                            <a href="https://www.facebook.com/lissashch" target="_blank">Senior Adviser/EdUSA Ukraine</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s62.png" alt="">
                            </div>
                            <p>
                                <b>Denis Chernobaev</b> <br>
                                Despite the fact that I personally know the guys from the time when they were a small web studio in Odessa, I have not dared to ask for help for a very long time, about three years. As an entrepreneur you are always trying to pull out all by yourself. Only now I understand how much I was mistaken before. We have made a significant breakthrough in just a couple of months, namely carried out the rebranding, worked out the development strategy and began to implement it. We are preparing to launch a whole pool of activities in online advertising, printing polygraph materials and branded merch for our clients. In general, everything is seething! By the way, if you need a video for business, please contact us. We will be happy to help!

                            </p>
                            <a href="https://www.facebook.com/tiberianSunny" target="_blank">Owner Bona Idea Production</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s63.jpg" alt="">
                            </div>
                            <p>
                                <b>Vadim Kernichy</b><br>
                                We got acquainted with the company thanks to the occasion, my wife was looking for something on YouTube and accidentally got to the channel of the company “Marketer # 2”. We watched a few video and realized that we understood very little in marketing, so we decided to seek advice. Our project lasted 5 months. Despite the fact that for the entire period of work we saw each other only once, all tasks on the project were completed accurately and on time. A huge "Thank you" is worth saying that the team "pushes" the customer side, when we forgot to do something on our part.
                            </p>
                            <b>BORO, Founder</b>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s64.png" alt="">
                            </div>
                            <p>
                                <b>Victor Vaitsekhovskiy</b><br>
                                We just tried to find a marketer in the company, and found a team that turned our understanding of the world of Marketing on its head. The most difficult thing was just to start trusting the guys on 100% and we managed to do that in two months. Wish we did that on the first day, then we would have the results earlier. Now, at the end of the 5-month contract, we have agreed on the extension of the contract for another 5 months. Our business is growing, we are updating the team, have moved to a beautiful new office and continue to optimize business processes day after day. Thank you very much for your friendship and effective partnership!
                            </p>
                            <a href="https://www.facebook.com/viktor.voytsekhovskiy" target="_blank">LASTICK, Owner</a>
                        </div>

                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s67.png" alt="">
                            </div>
                            <p>
                                <b>Maxim Pasynok</b><br>
                                The guys quickly plunged into the company, deeply studied business processes, developed a marketing strategy. We were shooting videos about the company, working with all possible types of advertising, and even restructured the sales department. Thanks to this, the level of customer return has increased, we have already opened a new retail store. One big company in the B2B segment even started working with us. We didn’t understand previously what Marketing was, but this changed after meeting the "Marketer#2" team.
                            </p>
                            <a href="https://www.facebook.com/maxim.konors" target="_blank">KONORS, Co-owner</a>
                        </div>
                    </div>
                </div>
                <div class="button_block">
                    <button data-toggle="modal" data-target="#videoall"><span>View video reviews</span> <img src="assets/img/mini_play.png" alt=""></button>
                </div>
            </div>
        </section>
        <section class="sec7">
            <div class="container">
                <h2 class="center"><span>Our</span> friends, clients and partners</h2>

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
                <h2 class="center"><span>FAQ</span></h2>
                <div class="desc hidden-xs hidden-sm hidden-md center">Click on the question of interest on the left, see the right answer on the right</div>
                <div class="desc visible-xs visible-sm visible-md center">Click on the question and read the answer!</div>

                <div class="block">
                    <div class="left_b">
                        <div class="list ls1">
                            <span>Do you do advertising or promotion?</span>
                            <div class="contmobblock coco1 hidden-lg">
                                <p>Unfortunately, due to a great amount of "infobusiness guru", many concepts and terms in the real world are often confused with fiction.</p>
                                <p>Marketing management is the construction of business processes, promotion is a part of marketing, and advertising is a part of promotion</p>
                                <p>We together with owners / investors build business processes, including issues of positioning, promotion and advertising</p>
                                <p>Let's describe all in order. There are marketing audit, coordination of the development concept, approval of the strategy, budget planning and active actions. However, everything may differ, depending on the features and objectives of your business.</p>
                            </div>
                        </div>
                        <div class="list ls2"><span>Can you help with Internet advertising?</span>
                            <div class="contmobblock coco2 hidden-lg">
                                <p>We have great experience in a number of projects on Internet promotion, from development of a concept for the future web-site to implementing marketing strategies online. To date, there are around 180 projects</p>
                                <p>However, we are not an Internet promotion agency which performs tasks on an outsourcing basis. Under the strategy developed and agreed with a customer, we help to evaluate specialists while recruiting process. We attract necessary outsource specialists (if there is no need to keep a full-time employee in a company) and even build the right interaction with agencies. What is more, we can organize a whole mini-studio for shooting videos on YouTube in your office. In short, if you have any tasks, it is our concern how to accomplish them</p>

                            </div>
                        </div>
                        <div class="list ls3"><span>How much does your work cost?</span>
                            <div class="contmobblock coco3 hidden-lg">
                                <p>Budgets are rather relative. It all depends on the tasks, their volume and responsibility of our company</p>
                                <p>We undertake projects for a period from 3 months, and costing from USD 1,000.00 per project. But believe me, these figures will not tell you anything. Moreover, the maximum cost of the project we worked on was estimated at USD 120,000.00 for several months of its implementation</p>
                                <p>Yes, there are a lot of variables. At the same time, a step-by-step payment available and much more other things</p>
                                <p>What about talking in person and clarifying the situation better?</p>
                            </div>
                        </div>
                        <div class="list ls4"><span>How much projects have you implemented? </span>
                            <div class="contmobblock coco4 hidden-lg">
                                <p>This has already been said, but let's just say it again. Today, we have over 180 marketing projects in Internet advertising and about 40 companies that we helped to set up business processes on a turn-key basis</p>
                                <p>On the one hand, each business operates on roughly the same growth pattern and development models. On the other hand, every business needs its own, individual approach</p>
                                <p>Combining these two factors together with the psychology of change for Owners, we get great results for our clients!</p>
                            </div>
                        </div>
                        <div class="list ls5"><span>I do not need staff members. What should I do? </span>
                            <div class="contmobblock coco5 hidden-lg">
                                <p>The conditions of our future cooperation depend on the input we will receive from the Owner / Customer at the beginning of the project</p>
                                <p>If no full-time employees are needed, so that is.</p>
                                <p>A lot of marketers and marketing directors are feraful of working with remote employees/ freelancers. Our advantage is the skills and experience of effectively building this form of work. You can call it our "professional highlight", ok?)</p>
                            </div>
                        </div>
                        <div class="list ls6"><span>How long has your company existed? </span>
                            <div class="contmobblock coco6 hidden-lg">
                                <p>Under the name "Marketer # 2", we have been working for over two years. However, the total experience in marketing and building business processes is more than 12 years</p>
                                <p>Our practical experience is very different, but rather deep, namely event business, BTL (promotions), FMCG retail and the construction of combined business systems, the organization of business in the field of sports, tourism, rental of sports equipment and extreme recreation, and even experience as an online promotion agency and many other examples</p>
                                <p>However, believe me, we will approach your business individually, from scratch</p>

                            </div>
                        </div>
                        <div class="list ls7"><span>We need to carry out rebranding</span>
                            <div class="contmobblock coco7 hidden-lg">
                                <p>We willingly help you. We will develop a brand concept, attract the best designers (at least those who will fit the budget), and literally give a new life to the positioning of your company</p>
                                <p>Of course, this kind of work will still involve creating a corporate identity for all the contact points of your company with the audience. Accordingly, everything will look professional</p>
                                <p>We adore the details, namely laconic shapes, colors that are correctly matched (bearing the right meaning), fonts and other little things. The devil is in details. Did you hear this phrase?</p>
                            </div>
                        </div>
                        <div class="list ls8"><span>We urgently need a website</span>
                            <div class="contmobblock coco8 hidden-lg">
                                <p>You have two options</p>
                                <p>The fisrt one is to to call the first web studio that came along. They will be happy to help you and put out any fire for your money</p>
                                <p>The second one is to realize that a site is a complex structural mechanism which shall reveal the company's values, its products and be convenient for obtaining information for customers. A site shall also meet a huge number of technical requirements which will unlikely get known to you in studios for many reasons. If you decide to approach the process consciously, it’s better to make a site-plug or a business card site for the first time, and walk through the whole way correctly, namely company audit, strategy, values, products, differentiation from the market, and only then pack the web representation. We deal with this option as we are responsible for the results</p>
                            </div>
                        </div>
                        <div class="list ls9 active"><span>Are there is anything you do not do?</span>
                            <div style="display:block;" class="contmobblock coco9 hidden-lg">
                                <p>The question is almost provocative)</p>
                                <p>As Marketing Management is a part of our specialization, our task is to Manage Processes, and not do all by hand. We can accomplish almost any task with the help of involved specialists and contractors, naturally. HOWEVER, if it turns out that the tasks of your business are Out of Our Competence, we will honestly and frankly admit it and try to recommend proven and reliable partners for you</p>
                                <p>The principle is simple, either do your job perfectly, or do not do it at all</p>
                            </div>
                        </div>

                    </div>
                    <div class="right_b">
                        <div class="cont_block">
                            <p>Unfortunately, due to a great amount of "infobusiness guru", many concepts and terms in the real world are often confused with fiction.</p>
                            <p>Marketing management is the construction of business processes, promotion is a part of marketing, and advertising is a part of promotion</p>
                            <p>We together with owners / investors build business processes, including issues of positioning, promotion and advertising</p>
                            <p>Let's describe all in order. There are marketing audit, coordination of the development concept, approval of the strategy, budget planning and active actions. However, everything may differ, depending on the features and objectives of your business.</p>
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
                            <img src="assets/img/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="urik">
                        <a href="https://www.akingump.com/en/" target="_blank">Legal support</a>
                    </div>
                    <div class="cont">
                        <a href="https://goo.gl/maps/j2Y12S2fDWdz6S5M9" target="_blank"><img src="assets/img/m1.png" alt=""><span>04116, Kiev, <br/> Tbilisi lane 4/10</span></a>
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
                                <img src="assets/img/logo.svg" alt="">
                            </a>
                        </div>
                        <div class="urik">
                            <a href="https://www.akingump.com/en/" target="_blank">Legal support</a>
                        </div>
                    </div>
                    <div class="dflexx my2flex">
                        <div class="cont">
                        <a href="https://goo.gl/maps/FPF6NitkMHnWtP5J6" target="_blank"><img src="assets/img/m1.png" alt=""><span>04116, Kiev, <br/> Tbilisi lane 4/10</span></a>
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
                        Apply now <br>
                        and get a <span> special </span> offer!
                    </h4>
                </div>
                <div class="modal_body">
                    <div class="subtitle center">
                        One-on-one consultation with an expert to optimize <br> marketing processes in your business
                    </div>

                    <div class="form">
                        <form action="sender.php" method="post">
                            <div class="inpb">
                                <input class="name" name="name" type="text" placeholder="Your name">
                            </div>
                            <div class="inpb">
                                <input class="phone" name="phone" type="text" placeholder="Your phone number*" required>
                            </div>
                            <div class="inpb">
                                <input class="email" name="post" type="text" placeholder="example@mail.com">
                            </div>
                            <div class="inpbutton">
                                <button type="button" class="send">Send request</button>
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
                        Thank you for your activity! We will call back for you soon!
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
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/GLDSeuBUedU?autoplay=1');
        });
        $('#video1').on('hidden.bs.modal', function(e) {
            $(this).find('.video1').attr('src', '');
        });
        $('#video2').on('show.bs.modal', function(e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/CnAD4SUssLs?autoplay=1');
        });
        $('#video2').on('hidden.bs.modal', function(e) {
            $(this).find('.video1').attr('src', '');
        });
        $('#videoall').on('show.bs.modal', function(e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/OdDirXOKP3c?autoplay=1');
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
