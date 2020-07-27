$(document).ready(function(){
  $('.menu-profile > .list-items:nth-of-type(1)').on('click', function(){
    $('.content-info:nth-of-type(1)').addClass('show');
    $('.content-info:nth-of-type(1)').removeClass('hide');
    $('.content-info:nth-of-type(2)').removeClass('show');
    $('.content-info:nth-of-type(3)').removeClass('show');
    $('.content-info:nth-of-type(4)').removeClass('show');
  });
  $('.menu-profile > .list-items:nth-of-type(2)').on('click', function(){
    $('.content-info:nth-of-type(2)').addClass('show');
    $('.content-info:nth-of-type(1)').removeClass('show');
    $('.content-info:nth-of-type(1)').addClass('hide');
    $('.content-info:nth-of-type(3)').removeClass('show');
    $('.content-info:nth-of-type(4)').removeClass('show');
  });
  $('.menu-profile > .list-items:nth-of-type(3)').on('click', function(){
    $('.content-info:nth-of-type(3)').addClass('show');
    $('.content-info:nth-of-type(1)').removeClass('show');
    $('.content-info:nth-of-type(1)').addClass('hide');
    $('.content-info:nth-of-type(2)').removeClass('show');
    $('.content-info:nth-of-type(4)').removeClass('show');
  });
  $('.menu-profile > .list-items:nth-of-type(4)').on('click', function(){
    $('.content-info:nth-of-type(4)').addClass('show');
    $('.content-info:nth-of-type(1)').removeClass('show');
    $('.content-info:nth-of-type(1)').addClass('hide');
    $('.content-info:nth-of-type(2)').removeClass('show');
    $('.content-info:nth-of-type(3)').removeClass('show');
  });
});
