
$('document').ready(function() {
  $('#doctorSlideshow').owlCarousel({
    nav: true,
    dots: false,
    navText: ["<span class='mai-arrow-back'></span>", "<span class='mai-arrow-forward'></span>"],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });
});

$('document').ready(function() {
  $("a[data-role='smoothscroll']").click(function(e) {
    e.preventDefault();
    
    var position = $($(this).attr("href")).offset().top - nav_height;

    $("body, html").animate({
        scrollTop: position
    }, 1000 );
    return false;
  });
});

$('document').ready(function() {
  // Back to top
  var backTop = $(".back-to-top");

  $(window).scroll(function() {
    if($(document).scrollTop() > 400) {
      backTop.css('visibility', 'visible');
    }
    else if($(document).scrollTop() < 400) {
      backTop.css('visibility', 'hidden');
    }
  });

  backTop.click(function() {
    $('html').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});


$('document').ready(function() {
  // Tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // Popovers
  $('[data-toggle="popover"]').popover();

  // Page scroll animate
  new WOW().init();
});

//Login
const formOpenLoginBtn = document.querySelector("#form-login-open"),
formOpenLoginBtn2 = document.querySelector("#form-login-open2"),
formOpenRegisterBtn = document.querySelector("#form-register-open"),
home = document.querySelector("body"),
formContainer  = document.querySelector(".form-container"),
formCloseBtn  = document.querySelector(".form-close"),
signupBtn  = document.querySelector("#signup"),
loginBtn  = document.querySelector("#login"),
pwShowHide  = document.querySelector(".pw-hide");

formOpenLoginBtn.addEventListener("click",() => home.classList.add("show-login"))
formCloseBtn.addEventListener("click",() => home.classList.remove("show-login"))

formOpenLoginBtn2.addEventListener("click",() => home.classList.add("show-login"))
formCloseBtn.addEventListener("click",() => home.classList.remove("show-login"))



signupBtn.addEventListener("click",(e) =>{
  e.preventDefault();
  formContainer.classList.add("active");
})
loginBtn.addEventListener("click",(e) =>{
  e.preventDefault();
  formContainer.classList.remove("active");
})
formOpenRegisterBtn.addEventListener("click",() =>{
  home.classList.add("show-login");
  formContainer.classList.add("active");
})


pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if(getPwInput.type === "password"){
      getPwInput.type = "text";
      icon.classList.replace("uil-eye-slash", "uil-eye");
    }else{
      getPwInput.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
});
