//Flip page
(function ($) {
    $(document).ready(function () {
        $(window).scroll(function() {
            if($(this).scrollTop() > 160){
                $(".back-to-top").css("display", "block");
            } else {
                $(".back-to-top").css("display", "none");
            }
        });
        $(".back-to-top").click(function() {
            $("html, body").animate({scrollTop: 0}, 800);
        });
    });
}(jQuery));

//Contrast
(function ($) {
    $("#contraste").click(function (e) {
        e.preventDefault();
        $(".menu, body, .footer").stop().toggleClass("bgContrast");
    });
}(jQuery));

function myFunction() {
    document.getElementById("acessibilidade-myDropdown").classList.toggle("acessibilidade-show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.acessibilidade-dropbtn')) {
        var dropdowns = document.getElementsByClassName("acessibilidade-dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('acessibilidade-show')) {
                openDropdown.classList.remove('acessibilidade-show');
            }
        }
    }
}
//Aumentar a font
var size = 1.0;
var sizePainel = 2;
var noticiasH1 = 1.5;
var noticiasH4 = 0.8;
var vamosvirarojogoh1 = 16.0;
var vamosvirarojogospan = 1.0;
var telefonesuteis = 0.9;
var footerh1 = 1.5;
var footerspan = 0.8;
var sectioncontainer = 1.0;
(function ($) { 
    $("#tamanhofonte").click(function () {
        var increase = 0.1;

        if (size < 1.5) {
            size += increase;
            sizePainel += increase;
            noticiasH1 += increase;
            noticiasH4 += increase;
            vamosvirarojogoh1 += increase;
            telefonesuteis += increase;
            footerh1 += increase;
            footerspan += increase;
            vamosvirarojogospan += increase;
            sectioncontainer += increase;
        }
        else {
            size = 1.0;
            sizePainel = 2;
            titlesliderh1 = 1.5;
            noticiasH1 = 1.5;
            noticiasH4 = 0.8;
            telefonesuteis = 0.9;
            footerh1 = 1.5;
            footerspan = 0.8;
            vamosvirarojogoh1 = 16.0;
            vamosvirarojogospan = 1.0;
            sectioncontainer = 1.0;
        }
        $(".section-container").css('font-size', sectioncontainer + 'em');
        $("section").css('font-size', size + 'em');
        $(".desc-title-slider span").css('font-size', sizePainel + 'em');
        $(".title-slider h1").css('font-size', size + 'em');
        $("section h1").css('font-size', noticiasH1 + 'em');
        $("section h4").css('font-size', noticiasH4 + 'em');
        $("section .desc-slider2-conteudo h1").css('font-size', vamosvirarojogoh1 + 'em');
        $("section .desc-slider2-texto span").css('font-size', vamosvirarojogospan + 'em');
        $("section .telefones-uteis-wrap").css('font-size', telefonesuteis + 'em');
        $(".footer h1").css('font-size', footerh1 + 'em');
        $(".footer span").css('font-size', footerspan + 'em');
    });
}(jQuery)); 