//------------------------- animation menu burger -------------------------
document.addEventListener('DOMContentLoaded', function () {

    const burger = document.querySelector('.burgerMenu');
    const menu = document.querySelector('.navbar-nav')
    const logo = document.querySelector('.logo-site');
    
  
    burger.addEventListener("click", function () {
      burger.classList.toggle("open");
      menu.classList.toggle("open");
  
        // Ajoutez ou supprimez la classe 'fixed' au logo
        logo.classList.toggle("fixed", burger.classList.contains("open"));
    });
  
    menu.addEventListener('click', function () {
      burger.classList.remove('open');
      menu.classList.remove('open');
  
      logo.classList.remove("fixed");
    });
    });