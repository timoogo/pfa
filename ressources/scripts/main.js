/*-----------------------------------------------
Ce script permet de gérer les paramètres de Slick, une api faisant des slider.
Les [paramètres] sont accès explicites pour avoir a tous les détailler.
 On peut trouver 2 Sliders le premier concerne les personnages [section.SlidesShow], la 2ème concerne les funfacts [section#fun_fact] qui se trouve sur [index.php] */
$(document).ready(() => {
    $('.slideshow .slick').slick({
        infinite: true,
        dots: true,
        slidesToShow: 4,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2500,      
        
        slidesToScroll: 3,
        responsive:[
            {
                breakpoint:1024,
                settings:{
                    slidesToShow: 2,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 2500,      
                    slidesToScroll: 2,
                    infinite: true,
                    centerMode: true,
                    centerPadding: '0',
                    
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                    autoplay: false,
                    autoplaySpeed: 2500,      
                    slidesToScroll: 1,
                    infinite: true,
                    centerMode: true,
                    centerPadding: '0',
                }
            }
        ]
    });

  
        $('.fact').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
        });
 
 
});

