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
      "<p>Unfortunately, due to a great amount of 'infobusiness guru', many concepts and terms in the real world are often confused with fiction.</p><p>Marketing management is the construction of business processes, promotion is a part of marketing, and advertising is a part of promotion</p><p>We together with owners / investors build business processes, including issues of positioning, promotion and advertising</p><p>Let's describe all in order. There are marketing audit, coordination of the development concept, approval of the strategy, budget planning and active actions. However, everything may differ, depending on the features and objectives of your business.</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco1").toggle();
  });
  jQuery(".sec8 .ls2").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>We have great experience in a number of projects on Internet promotion, from development of a concept for the future web-site to implementing marketing strategies online. To date, there are around 180 projects</p><p>However, we are not an Internet promotion agency which performs tasks on an outsourcing basis. Under the strategy developed and agreed with a customer, we help to evaluate specialists while recruiting process. We attract necessary outsource specialists (if there is no need to keep a full-time employee in a company) and even build the right interaction with agencies. What is more, we can organize a whole mini-studio for shooting videos on YouTube in your office. In short, if you have any tasks, it is our concern how to accomplish them</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco2").toggle();
  });
  jQuery(".sec8 .ls3").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>Budgets are rather relative. It all depends on the tasks, their volume and responsibility of our company</p><p>We undertake projects costing from USD 1,000.00 per project. But believe me, these figures will not tell you anything. Moreover, the maximum cost of the project we worked on was estimated at USD 120,000.00 for several months of its implementation</p><p>Yes, there are a lot of variables. At the same time, a step-by-step payment available and much more other things</p><p>What about talking in person and clarifying the situation better?</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco3").toggle();
  });
  jQuery(".sec8 .ls4").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>This has already been said, but let's just say it again. Today, we have over 250 marketing projects in Internet advertising and about 40 companies that we helped to set up business processes on a turn-key basis</p><p>On the one hand, each business operates on roughly the same growth pattern and development models. On the other hand, every business needs its own, individual approach</p><p>Combining these two factors together with the psychology of change for Owners, we get great results for our clients!</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco4").toggle();
  });
  jQuery(".sec8 .ls5").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>The conditions of our future cooperation depend on the input we will receive from the Owner / Customer at the beginning of the project</p><p>If no full-time employees are needed, so that is.</p><p>A lot of marketers and marketing directors are feraful of working with remote employees/ freelancers. Our advantage is the skills and experience of effectively building this form of work. You can call it our "professional highlight", ok?)</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco5").toggle();
  });
  jQuery(".sec8 .ls6").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      '<p>Under the name "Marketer # 2", we have been working for over three years. However, the total experience in marketing and building business processes is more than 14 years</p><p>Our practical experience is very different, but rather deep, namely event business, BTL (promotions), FMCG retail and the construction of combined business systems, the organization of business in the field of sports, tourism, rental of sports equipment and extreme recreation, and even experience as an online promotion agency and many other examples</p><p>However, believe me, we will approach your business individually, from scratch</p>'
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco6").toggle();
  });
  jQuery(".sec8 .ls7").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>We willingly help you. We will develop a brand concept, attract the best designers (at least those who will fit the budget), and literally give a new life to the positioning of your company</p><p>Of course, this kind of work will still involve creating a corporate identity for all the contact points of your company with the audience. Accordingly, everything will look professional</p><p>We adore the details, namely laconic shapes, colors that are correctly matched (bearing the right meaning), fonts and other little things. The devil is in details. Did you hear this phrase?</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco7").toggle();
  });
  jQuery(".sec8 .ls8").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>You have two options</p><p>The fisrt one is to to call the first web studio that came along. They will be happy to help you and put out any fire for your money</p><p>The second one is to realize that a site is a complex structural mechanism which shall reveal the company's values, its products and be convenient for obtaining information for customers. A site shall also meet a huge number of technical requirements which will unlikely get known to you in studios for many reasons. If you decide to approach the process consciously, it’s better to make a site-plug or a business card site for the first time, and walk through the whole way correctly, namely company audit, strategy, values, products, differentiation from the market, and only then pack the web representation. We deal with this option as we are responsible for the results</p>"
    );
    jQuery(".contmobblock").hide();
    jQuery(".coco8").toggle();
  });
  jQuery(".sec8 .ls9").click(function () {
    jQuery(".sec8 .list").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".sec8 .right_b .cont_block").html(
      "<p>The question is almost provocative)</p><p>As Marketing Management is a part of our specialization, our task is to Manage Processes, and not do all by hand. We can accomplish almost any task with the help of involved specialists and contractors, naturally. HOWEVER, if it turns out that the tasks of your business are Out of Our Competence, we will honestly and frankly admit it and try to recommend proven and reliable partners for you</p><p>The principle is simple, either do your job perfectly, or do not do it at all</p>"
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
