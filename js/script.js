jQuery(document).ready(function ($) {
  //save boolean
  var pause = false;
  //save items that with number
  var item=  $('.select-item');
  //save blocks
  var block=  $('.bg-block');
  //variable for counter
  var k =0;
   //interval function works only when pause is false
    // setInterval(function () {
      if (!pause) {
        var $this = item.eq(k);
        if (item.hasClass('active'))  {
          item.removeClass('active');
        };
        block.removeClass('active').eq(k).addClass('active');
        $this.addClass('active');
          //increase k every 1.5 sec
          k++;
          //if k more then number of blocks on page
          if (k >= block.length ) {
              //rewrite variable to start over
              k = 0;
            }
          }
      //every 1.5 sec
    // }, 1500);
    item.hover(function () {
    //remove active class from all except this
    $(this).siblings().removeClass("active");
    $(this).addClass('active');
      //remove active class from all
      block.removeClass('active');
    //add active class to block item which is accounted as index cliked item
    block.eq($(this).index()).addClass('active');
    //on hover stop interval function
    pause = true;
  }, function () {
    //when hover event ends, start interval function
    pause = true;
  });
  });
// FAQs
jQuery(document).ready(function ($) {
  var $titleTab = $('.title_tab');
  // $('.Accordion_item:eq(0)').find('.title_tab').addClass('active').next().stop().slideDown(300);
  $('.Accordion_item:eq(0)').find('.inner_content').find('p').addClass('show');
  $titleTab.on('click', function(e) {
    e.preventDefault();
    if ( $(this).hasClass('active') ) {
      $(this).removeClass('active');
      $(this).next().stop().slideUp(500);
      $(this).next().find('p').removeClass('show');
    } else {
      $(this).addClass('active');
      var top = ($(".active").offset() || { "top": NaN }).top - 100;
      if (!isNaN(top)) {
        $('html, body').animate({
          scrollTop: top
        }, 1000);
      }
      $(this).next().stop().slideDown(500);
      $(this).parent().siblings().children('.title_tab').removeClass('active');
      $(this).parent().siblings().children('.inner_content').slideUp(500);
      $(this).parent().siblings().children('.inner_content').find('p').removeClass('show');
      $(this).next().find('p').addClass('show');
    }
  });
});
jQuery(document).ready(function ($) {
  var myWow = new WOW({live:true});
  myWow.init();
});
