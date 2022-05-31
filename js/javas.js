$("#trend_categories").click(function () {
  $(".categories_box").fadeToggle("fast");
  $(".categories_box").toggleClass("show_1");
  if ($(".categories_box").hasClass("show_1") == true) {
    $("#myDIV").html("<i class='far fa-angle-up'></i>");
    $(".categories_box").css({ "display": "flex", 'z-index': '9999' });
  }
  else if ($(".categories_box").hasClass("show_1") == false) {
    $("#myDIV").html("<i class='far fa-angle-down'></i>");
  }

});
$(document).ready(function () {
  $(".hamburger").click(function () {
    $(this).toggleClass("is-active");
  });
});


$(window).on("load", function () {
  window.onscroll = function () { myFunction() };
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  var mobile = document.getElementById("mobile-navbar");
  var sticky2 = mobile.offsetTop;
  var circle = document.getElementById("chat");
  var sticky3 = circle.offsetTop;
  if ($(window).width() > 991) {
    function myFunction() {
      if (window.pageYOffset >= sticky2) {
        mobile.classList.add("sticky2");
        navbar.classList.add("sticky");
        circle.classList.add("sticky3");

      } else {
        mobile.classList.remove("sticky2");
        navbar.classList.remove("sticky");
        circle.classList.remove("sticky3");


      }
    }
  }
  else {
    function myFunction() {
      if (window.pageYOffset >= sticky2) {
        mobile.classList.add("sticky2");
        navbar.classList.add("sticky");
        circle.classList.add("sticky3");
        $(".search_section").css("margin-top", "90px");


      } else {
        mobile.classList.remove("sticky2");
        navbar.classList.remove("sticky");
        circle.classList.remove("sticky3");


      }
    }
  }
})

$('#EN').click(function () {
  $('#drop-img').attr('src', 'images/usa.png');
  $('#drop-text').text('EN');
});

$('#AZE').click(function () {
  $('#drop-img').attr('src', 'images/azerbaijan.png');
  $('#drop-text').text('AZE');
});

$('#ARAB').click(function () {
  $('#drop-img').attr('src', 'images/arabic.png');
  $('#drop-text').text('ƏRƏB');
});

$('#RUS').click(function () {
  $('#drop-img').attr('src', 'images/russia.png');
  $('#drop-text').text('RUS');
});


$('.hamburger').click(function () {
  $('html').toggleClass('activet');
})
var count = 0;
$(".hamburger").click(function () {
  count++;
  var isEven = function (someNumber) {
    return (someNumber % 2 === 0) ? true : false;
  };
  if (isEven(count) === false) {
    $(".navbar_section").css({ "background-color": "transparent" });
    $(".site_logo").css({ "visibility": "hidden" });
    $(".sticky2").css({ "box-shadow": "none" });
    $('.li1').css({ 'transform': 'translateX(0)', 'opacity': '1' });
    $('.li2').css({ 'transform': 'translateX(0)', 'opacity': '1' });
    $('.li3').css({ 'transform': 'translateX(0)', 'opacity': '1' });
    $('.icon1').css({ 'transform': 'translateX(0)', 'opacity': '1' });
    $('.icon2').css({ 'transform': 'translateX(0)', 'opacity': '1' });
    $('.icon3').css({ 'transform': 'translateX(0)', 'opacity': '1' });
    $('.icon4').css({ 'transform': 'translateX(0)', 'opacity': '1' });
    $('section').css('filter','blur(5px)');    
    $('.search_section').css('filter','blur(5px)');   
    $('h1').css('filter','blur(5px)');  
  } else if (isEven(count) === true) {
    $(".navbar_section").css({ "background-color": "#fafafa" });
    $(".site_logo").css({ "visibility": "visible" });
    $(".sticky2").css({ "box-shadow": "0 5px 10px rgb(0 0 0 / 20%)" });
    $('.li1').css({ 'transform': 'translateX(200px)', 'opacity': '0' });
    $('.li2').css({ 'transform': 'translateX(200px)', 'opacity': '0' });
    $('.li3').css({ 'transform': 'translateX(200px)', 'opacity': '0' });
    $('.icon1').css({ 'transform': 'translateX(200px)', 'opacity': '0' });
    $('.icon2').css({ 'transform': 'translateX(200px)', 'opacity': '0' });
    $('.icon3').css({ 'transform': 'translateX(200px)', 'opacity': '0' });
    $('.icon4').css({ 'transform': 'translateX(200px)', 'opacity': '0' });
    $('section').css('filter','blur(0)');    
    $('.search_section').css('filter','blur(0)');   
    $('h1').css('filter','blur(0)');    
  }
});


$('#ok').click(function () {
  $('.chat').fadeIn();
});

$('#chat-close').click(function () {
  $('.chat').fadeOut();
});

$('#chat').click(function () {
  $('.chat').fadeIn();
});
$('.ad_service').click(function () {
  $('.toast').fadeIn();
});
$('#close_toast').click(function () {
  $('.toast').fadeOut();
});
$(document).ready(function () {
  $("#left_arrow").click(function () {
    $('.category_section').animate({
      scrollLeft: "-=100%"
    }, "slow");
  }) 
  $("#right_arrow").click(function () {
    $('.category_section').animate({
      scrollLeft: "+=100%"
    }, "slow");
  })
})

$(".cafe-img-more img").click(function () {
  var src = $(this).attr("src");
  $(".zoom-img #zoom").attr("src", src);
  $(".zoom-img").css("display", "flex");
  $('html').css('overflow-y', 'hidden');
})

$('#cancel').click(function () {
  $('.zoom-img').fadeOut();
  $('html').css('overflow-y', 'auto');
})
$('.rezerv').click(function () {
  $('.Modal-rezerv').fadeIn();
  $('.Modal-rezerv').css('display', 'flex');
  $('html').css('overflow-y', 'hidden');
});

$('.reservation_close').click(function () {
  $('.Modal-rezerv').fadeOut();
  $('html').css('overflow-y', 'auto');
});

$('.table_img img').click(function () {
  var src = $(this).attr("src");
  $(".table-zoom #table-img").attr("src", src);
  $('.table-zoom').fadeIn();
  $('.table-zoom').css('display', 'flex');
  $(".table-zoom2 #table-zoom-img2").attr("src", src);
  $('.table-zoom2').fadeIn();
  $('.table-zoom2').css('display', 'flex');
  $('html').css('overflow-y', 'hidden');
});
$('.table-close').click(function () {
  $('.table-zoom').fadeOut();
})
$('.table-close2').click(function () {
  $('.table-zoom2').fadeOut();
});
$('.room_design img').click(function () {
  var src = $(this).attr("src");
  $(".table-zoom3 #table-zoom-img3").attr("src", src);
  $('.table-zoom3').fadeIn();
  $('.table-zoom3').css('display', 'flex');
  $('html').css('overflow-y', 'hidden');
});
$('.images_small img').click(function () {
  var src = $(this).attr("src");
  $(".table-zoom3 #table-zoom-img3").attr("src", src);
  $('.table-zoom3').fadeIn();
  $('.table-zoom3').css('display', 'flex');
  $('html').css('overflow-y', 'hidden');
});

$('#sm_img4').click(function () {
  $('#table-zoom-img3').attr('src', 'https://images.pexels.com/photos/6899393/pexels-photo-6899393.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')
});
$('.table-close3').click(function () {
  $('.table-zoom3').fadeOut();
});
$('.view_cmmnt').click(function () {
  $('.view_comment').fadeIn();
  $('.view_comment').css('display', 'flex');
  $('html').css('overflow-y', 'hidden');
});
$('.comment_close').click(function () {
  $('.view_comment').fadeOut();
  $('html').css('overflow-y', 'auto');
});
var time = [, , ,];
var fecha = new Date();
var reloj = document.getElementById('reloj');
time[0] = fecha.getHours();
time[1] = fecha.getMinutes();
time[2] = fecha.getSeconds();

var id = setInterval(update, 1000);

//reloj.innerHTML='<div id="hora">'+time[0]+':'+time[1]+':'+time[2]+'</div>';
function update() {
  fecha = new Date();
  time[0] = modtime(fecha.getHours());
  time[1] = modtime(fecha.getMinutes());
  time[2] = modtime(fecha.getSeconds());
  reloj.innerHTML = '<span class="square" id="h">' + time[0] + '</span><span class="point">:</span><span class="square" id="m">' + time[1] + '</span><span class="point">:</span><span class="square" id="s">' + time[2] + '</span>';

}

function modtime(hora) {
  return (hora < 10 ? '0' + hora : hora);
}


$('.xususi-teklif').click(function(){
  $('.teklif').fadeIn();
  $('.teklif').css('display','flex');
  $('html').css('overflow','hidden');
  $('.teklif-bg').fadeIn();
})

$('#teklif-cancel').click(function(){
  $('.teklif').fadeOut();
  $('html').css('overflow','auto');
  $('.teklif-bg').fadeOut();
})

