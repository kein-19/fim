// poortfolio box
baguetteBox.run('.tz-gallery');


// event pada saat link di klik
$('.page-scroll').on('click', function (e) {

  // ambill isi href
  var tujuan = $(this).attr('href');
  // console.log(href);
  // tangkap element yang bersangkutan
  var elemenTujuan = $(tujuan);
  // console.log(elemenTujuan.offset().top);

  // $('body').scrollTop(elemenTujuan.offset().top);
  $("html, body").animate({
    scrollTop: elemenTujuan.offset().top - 50
  }, 2000, 'easeInOutBack');

  // e.preventDefault();

});

