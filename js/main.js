'use strict';

jQuery(function ($) {
  //HTMLが読み込まれたときに実行する処理
  $url =
    "https://app.rakuten.co.jp/services/api/IchibaItem/Ranking/20170628?format=json&applicationId=1032286552896890164";

  $.getJSON($url, function (json) {
    $(".swiper-container").html("");

    var dtl = "";
    var j = -1;
    var i = 0;
    //alert(json.Items.length);

    for (i = 0; i < json.Items.length; i++) {
      j++;
      if (j === 0) {
        dtl += '<div class="item-wrapper swiper-wrapper">';
      }
      var img = json.Items[i].Item.mediumImageUrls[0].imageUrl;
      img = img.replace("128x128", "182x182");
      var itmUrl = json.Items[i].Item.itemUrl;
      dtl +=
        '<div class="item-slide swiper-slide"><a href="' +
        itmUrl +
        '" target="_top"><img src="' +
        img +
        '" alt="" title="" border="0"></a></div>';
    }

    dtl += "</div>";
    dtl += '<div class="swiper-pagination"></div>';
    dtl += '<div class="swiper-button-prev"></div>';
    dtl += '<div class="swiper-button-next"></div>';

    $(".swiper-container").html(dtl);
    var mySwiper = new Swiper(".swiper-container", {
      loop: true,
      slidesPerView: 5,
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: 3000,
      nextButton: ".swiper-button-next",
      prevButton: ".swiper-button-prev"
    });
  });
});
