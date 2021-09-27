jQuery(document).ready(function () {
  // FORMS
  jQuery(".send").click(function () {
    var form = jQuery(this).closest("form");

    if (form.valid()) {
      var actUrl = form.attr("action");

      jQuery.ajax({
        url: actUrl,
        type: "post",
        dataType: "html",
        data: form.serialize(),
        success: function (data) {
          jQuery("#myModal").modal("hide");
          jQuery("#myThx").modal("show");
        },
        error: function () {},
      });
    }
  });

  jQuery(".sec8 .ls1").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).addClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Увы, из-за повального нашествия "гуру инфобизнеса" многие понятия и термины в реальном мире часто путают с вымыслом</p><p>Управление маркетингом - это построение бизнес-процессов, Promotion (продвижение) - часть маркетинга, а реклама - часть продвиждения</p><p>Мы вместе с собственниками/инвесторами выстраиваем бизнес-процессы - конечно же, включая вопросы позиционирования, продвижения - и рекламы</p><p>Если по порядку - то это: маркетинг-аудит, согласование концепции развития, утверждение стратегии, бюджетирование и активные действия. Однако, все может отличаться - в зависимости от особенностей и задач Вашего бизнеса</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco1").toggle();
  });
  jQuery(".sec8 .ls2").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>У нас большой опыт работы с проектами в интернет-продвижении: от разработки концепции будущего сайта - до реализации маркетинговых стратегий онлайн, для любой аудитории - это около 180 проектов на сегодняшний день.</p><p>Однако, мы не являемся агентством интернет-продвижения - которое выполняет задачи на аутсорсе. Под разработанную - и согласованную с Заказчиком стратегию мы помогаем оценить специалистов при подборе в штат. Привлекаем нужных на аутсорсе (если нет необходимости держать в компании штатную единицу), и даже выстраиваем правильное взаимодействие с агентствами. Да что там - можем целую мини-студию для съемки видео на YouTube в вашем офисе организовать. Одним словом - были бы задачи - а как их выполнить - это уже наша забота</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco2").toggle();
  });
  jQuery(".sec8 .ls3").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>Бюджеты относительны. Все зависит от задач, их объемов и ответственности, которые ложатся на нашу компанию</p><p>Мы беремся за проекты с оплатой от $1000 в месяц за проект - но поверьте, эти цифры ничего не скажут вам При этом максимальная стоимость проекта, с которым мы работали оценивалась в $120.000 за несколько месяцев его реализации</p><p>Да, много переменных. Да, можно оплачивать поэтапно. И еще много всего</p><p>Что насчет пообщаться лично, и прояснить ситуацию лучше?</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco3").toggle();
  });
  jQuery(".sec8 .ls4").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Уже где-то писали - но повторимся: сегодня у нас за плечами более 250 маркетинг-проектов в интернет-продвижении, и около 40 компаний, в которых мы помогали выстраивать бизнес-процессы "под ключ"</p><p>С одной стороны - в каждом бизнесе работают примерно одинаковые модели развития и роста. С другой - каждому бизнесу нужен свой, индивидуальный подход</p><p>Виртуозно совмещая оба момента, и добавляя психологию изменений для Собственников мы и получаем отличные результаты для наших клиентов!</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco4").toggle();
  });
  jQuery(".sec8 .ls5").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Условия нашей будущей работы будут зависеть от вводных, которые мы получим от Собственника/Заказчика еще на старте проекта.</p><p>Не в штат - значит, не в штат.</p><p>Многие маркетологи и маркетинг-директора боятся работать с удаленными сотрудниками/фрилансерами. Наша сильная сторона - навыки и опыт эффективного построения такой работы. Называйте это "профессиональной фишкой", Ок? )</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco5").toggle();
  });
  jQuery(".sec8 .ls6").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Под названием "Маркетолог#2" мы работаем более трех лет. Однако суммарный опыт в маркетинге и построении бизнес-процессов более 14 лет</p><p>Наш практический опыт - очень разный, при этом достаточно глубокий: ивент-бизнес, BTL (промоакции), FMCG ритейл и построение комбинированных бизнес-систем, организация бизнеса по части спорта, туризма, проката спортивного снаряжения и экстремального отдыха, и даже опыт работы в качестве агентства интернет-продвижения - и многие другие примеры</p><p>Однако, поверьте: к Вашему бизнесу мы подойдем индивидуально, с "чистого листа"</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco6").toggle();
  });
  jQuery(".sec8 .ls7").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>С радостью поможем. Разработаем концепцию бренда, привлечем лучших дизайнеров (по крайней мере тех - которые поместятся в бюджет), и буквально вдохнем Новую Жизнь в позиционирование Вашей компании.</p><p>Конечно же, работы будут включать в себя разработку фирменного стиля для всех Точек Контакта Вашей Компании с аудиторией - а значит, все будет выглядеть профессионально</p><p>Мы любим детали: лаконичность форм, правильно подобранные цвета (несущие правильный смысл), шрифты и прочие мелочи. Дьявол в мелочах, знаете такую фразу?</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco7").toggle();
  });
  jQuery(".sec8 .ls8").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>У Вас два варианта.</p><p>Первый - позвонить в первую попавшуюся веб-студию - они с радостью помогут Вам потушить любой пожар за ваши деньги</p><p>Второй - осознать, что сайт - это сложный структурный механизм, через который должны быть пропущены ценности компании, ее продукты и удобство получения информации для клиетов. А еще сайт должен отвечать огромному числу технических требований - о которых Вам вряд ли расскажут в студиях по многим причинам. Если вы решили подойти к процессу осознанно - лучше на первое время сделать сайт-заглушку, визитку - и пройти весь путь правильно: аудит компании, стратегия, ценности, продукты, дифференциация от рынка - а уже потом "упаковывать" веб-представленность. Мы работаем по такому варианту, так как отвечаем за результаты</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco8").toggle();
  });
  jQuery(".sec8 .ls9").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Вопрос почти провокационный )</p><p>По части нашей специализации - Управлению Маркетингом, наша задача - Управлять Процессами, а не "Делать Руками". Естественно, что с привлечениями специалистов и подрядчиков нам под силу практически любая задача. ОДНАКО если окажется так, что задачи Вашего бизнеса находятся Вне Нашей Компетенции - мы честно и открыто признаемся в этом - и постараемся рекомендовать проверенных и надежных партнеров для вас</p><p>Принцип простой: или делай свою работу великолепно, или не делай ее вообще</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco9").toggle();
  });

  // jQuery('.callback button').click(function () {
  //     jQuery('#burger-menu').toggleClass('active');
  //     jQuery('#mobile_menu').toggleClass('show_mobile_menu');
  // });

  jQuery(".totop").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(".wrapper").offset().top,
      },
      1000
    );
  });

  jQuery(".tofaq").click(function () {
    jQuery("#burger-menu").toggleClass("active");
    jQuery("#mobile_menu").toggleClass("show_mobile_menu");

    jQuery("html, body").animate(
      {
        scrollTop: jQuery(".sec8 h2").offset().top,
      },
      1000
    );
  });

  jQuery(".del").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(".s7").offset().top,
      },
      400
    );
  });

  jQuery(".lang-i").click(function () {
    jQuery(".all_lang").toggleClass("active-en");
  });

  var w = $(window).width();

  if (w > 600) {
    jQuery(".slide").hover(function () {
      jQuery(this).toggleClass("active");
    });
  }
  if (w < 600) {
    jQuery(".slide").click(function () {
      jQuery(this).toggleClass("active");
    });
  }

  jQuery("#burger-menu").click(function () {
    jQuery(".wrapper").toggleClass("active");
  });

  jQuery(".naw_li").click(function () {
    jQuery("#burger-menu").toggleClass("active");
    jQuery("#mobile_menu").toggleClass("show_mobile_menu");
    jQuery(".wrapper").toggleClass("active");
    console.log(1);
  });

  function scroll_to(e) {
    if (jQuery(e).length != 0) {
      jQuery("html, body").animate(
        {
          scrollTop: jQuery(e).offset().top,
        },
        500
      );
    }
  }

  jQuery(".naw_li-sec1").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(".sec1").offset().top,
      },
      1000
    );
  });

  jQuery(".naw_li-sec2").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(".sec2").offset().top,
      },
      1000
    );
  });

  jQuery(".naw_li-sec3").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(".sec3").offset().top + 300,
      },
      1000
    );
  });

  jQuery(".naw_li-sec6").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(".sec6").offset().top,
      },
      1000
    );
  });

  jQuery(".naw_li-sec8").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(".sec7").offset().top,
      },
      1000
    );
  });
});
