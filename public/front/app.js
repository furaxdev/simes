var burger = document.querySelector(".burger") ;
var nav = document.querySelector(".burger-dropdown") ;
var navdrop = nav.querySelectorAll("ul.dropdown > li > a") ;

function burgerclick() {
    burger.addEventListener("click", function() {
        nav.classList.toggle("burger-dropdown-active");
    });

}



function navclick() {
    for (var i =0 ; i < navdrop.length; i++)
    navdrop[i].addEventListener("click", function() {
        nav.classList.replace("burger-dropdown-active","burger-dropdown" );
    });

}



burgerclick() ;
navclick() ;


console.log(navdrop.length);