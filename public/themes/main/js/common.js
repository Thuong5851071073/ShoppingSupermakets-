//  show layout heaher
 function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display == "none") {
          x.style.display = "block";
        }
         else {
          x.style.display = "none";
        }
      }

      function show_cart() {
        var x = document.getElementById("cart_header");
        if (x.style.display == "none") {
          x.style.display = "block";
        }
         else {
          x.style.display = "none";
        }
      }

      function show_love() {
        var x = document.getElementById("love_list");
        if (x.style.display == "none") {
          x.style.display = "block";
        }
         else {
          x.style.display = "none";
        }
      }

      function show_list() {
        var x = document.getElementById("header_mb");
        if (x.style.display == "none") {
          x.style.display = "block";
        }
         else {
          x.style.display = "none";
        }
      }
// end

$(document).ready(function () {
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
