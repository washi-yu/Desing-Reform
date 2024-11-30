 $(function() {

const topBtn  = document.getElementById('top-btn');



window.addEventListener('scroll',()=>{
  const scrollValue = document.scrollingElement.scrollTop;
if (scrollValue >= 300) {
    $('#top-btn').fadeIn(500);
  }else{
     $('#top-btn').fadeOut(500);
 

      
  }


});
// hum
const nav = document.getElementById("nav-wrapper");
  const hamburger = document.getElementById("js-hamburger");
  const blackBg = document.getElementById("js-black-bg");
  // const headersp = document.getElementById("header-sp");

  hamburger.addEventListener("click", function () {
    nav.classList.toggle("open");
    // headersp.classList.toggle("none");
  });
  blackBg.addEventListener("click", function () {
    nav.classList.remove("open");
  });



 });