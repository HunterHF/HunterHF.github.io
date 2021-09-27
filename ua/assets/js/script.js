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
      '<p>Нажаль, у реальному світі через велику кількість "гуру інфобізнесу", багато понять та термінів часто плутають із домислами</p><p>Управління маркетингом - це побудова бізнес-процесів, Promotion (просування бренду/продукту) - частина маркетингу, а реклама - частина процесу просування</p><p>Разом із власниками/інвесторами ми вибудовуємо бізнес-процеси, звісно, включаючи вирішення питань позиціонування, просування та реклами</p> <p>Якщо по порядку - то це: маркетинг-аудит, узгодження концепції розвитку, узгодження стратегії, розробка бюджету та активні дії. Проте, все може відрізнятися в залежності від особливостей та завдань Вашого бізнесу</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco1").toggle();
  });
  jQuery(".sec8 .ls2").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>У нас великий досвід роботи з проєктами у низці інтернет-реклами: від створення концепції майбутнього сайту - до реалізації маркетинг-стратегій онлайн для будь-якої аудиторії - на сьогоднішній день це близько 180 проєктів</p><p>Проте, ми - НЕ агенство інтернет-реклами, котре виконує завдання на аутсорсі. Орієнтуючись на створену та узгоджену із Замовником стратегію, ми допомагаємо оцінити спеціалістів при наймі до штату. Якщо компанія не має необхідності у штатному працівнику, ми залучаємо відповідних людей на аутсорсі, і навіть будуємо правильну взаємодію з агенствами. Більше того - ми можемо організувати у Вашому офісі цілу міні-студію для зйомки відео на YouTube. Одним словом - були б задачі - а як їх виконати - це вже наш клопіт</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco2").toggle();
  });
  jQuery(".sec8 .ls3").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>Бюджет - річ відносна. Все залежить від кількості та об'єму завдань і рівня відповідальності, котрий лежатиме на нашій компанії</p><p>Ми працюємо з проектами вартістю від 1000$ за проектМи працюємо з проектами вартістю від 1000$ за проект, але повірте, ці цифри вам не скажуть майже нічого. Максимальна вартість проєкту (із яким ми працювали на цей момент), довжиною у декілька місяців оцінювалась у $120.000</p><p>Так, змінних даних багато, але можна оплачувати за кожен окремий етап. І ще багато іншого</p><p>Можливо, краще спілкуватися особисто та дізнатися про все детальніше?</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco3").toggle();
  });
  jQuery(".sec8 .ls4").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Про це вже було сказано - проте скажемо ще раз: сьогодні за нашими плечима більш як 250 маркетинг-проєктів у інтернет-рекламі та близько 40 компаній, котрим ми допомагали налаштовувати бізнес-процеси "під ключ"</p><p>З одного боку - кожен бізнес працює за приблизно однаковими моделями росту та розвитку. З іншого - кожен бізнес потребує свого, індивідуального підходу</p><p>Поєднуючи ці два фактори разом із психологією змін для Власників, ми отримуємо чудові результати для наших клієнтів!</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco4").toggle();
  });
  jQuery(".sec8 .ls5").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Умови нашої майбутньої співпраці залежатимуть від вихідних даних, котрі ми отримаємо від Власника/Замовника на початку проекту</p><p>Не потрібні штатні працівники - значить не потрібні.</p><p>Працювати з працівниками на віддаленій роботі/фрілансерами - страх багатьох маркетологів та маркетинг-директорів. Наша перевага - навички та досвід ефективної побудови саме такої роботи. Можете назвати це нашою "професійною родзинкою", добре?)</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco5").toggle();
  });
  jQuery(".sec8 .ls6").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Під назвою "Маркетолог#2" ми працюємо більше трьох років. Проте загальний досвід у сфері маркетингу та налаштуванні бізнес-процесів складає більше 14 років.</p><p>Наш практичний досвід дуже різний, проте досатньо глибокий: івент-бізнес, BTL (промоакції), FMCG рітейл та побудова комбінованих бізнес-систем, огранізація бізнесу в напрямку спорту, туризму, прокату спортивного спорядження та екстрим-відпочинку, і навіть - досвід роботи як агенства інтернет-реклами,та ще багато прикладів</p><p>Попри все, повірте: ми поглянемо на Ваш бізнес індивідуально, з нового початку</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco6").toggle();
  });
  jQuery(".sec8 .ls7").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>Охоче допоможемо. Розробимо концепцію бренду, залучимо кращих дизайнерів (принаймні тих, хто відповідатиме бюджету), та у буквальному сенсі дамо Нове Життя пизиціонуванню Вашої компанії.</p><p>Звісно, така робота ще буде складатися зі створення фірмового стилю для усіх Точок Контакту Вашої компанії з аудиторією - відповідно, все буде виглядати професійно</p><p>Ми обожнюємо деталі: лаконічні форми, правильно підібрані кольори (що несуть правильний сенс), шрифти та ішні дрібниці. Диявол у дрібницях, чули таку фразу?</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco7").toggle();
  });
  jQuery(".sec8 .ls8").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Ви маєте два варіанти.</p><p>Перший - звернутися до першої-ліпшої веб-студії - вони охоче допоможуть Вам загасити будь-яку пожежу за Ваші гроші</p><p>Другий - усвідомити те, що сайт - це складний структурований механізм, через який потрібно пропустити цінності компанії, її продукти та зручність отримання інформації клієнтом. Також сайт повинен відповідати значній кількості вимог - про які Вам навряд чи розкажуть студії, з багатьох причин. Якщо ви вирішили підійти до цього процесу свідомо - на перший час краще буде зробити сайт-заглушку або сайт-візитну картку - та пройти весь шлях правильно: аудит компанії, стратегія, цінності, продукти, диференціація від ринку - і тільки потім "запакувати" веб-презентованість. Ми працюємо саме за таким варіантом, оскільки несемо відповідальність за результати</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco8").toggle();
  });
  jQuery(".sec8 .ls9").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Провокаційне запитання)</p><p>Наша спеціалізація - Управління Маркетингом, наше завдання - Керувати Процесами, а не "робити вручну". Певна річ, залучивши спеціалістів та підрядників, ми виконаємо майже будь-яке завдання. АЛЕ, якщо стається так, що завдання Вашого бізнесу будуть знаходитися поза зоною нашої компетенції, - ми чесно зізнаємося у цьому та намагатимемося рекомендувати надійних та перевірених підрядників для вас</p><p>Принпиц простий: або виконуй свою роботу якнайкраще, або не виконуй взагалі</p>'
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

  // Knot

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
