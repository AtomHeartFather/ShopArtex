/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

// скрывает/показывает мобильное меню
function mobileMenu() { 
  var x1 = document.getElementById("mLeft");
    if (x1.style.display === "block") {
    x1.style.display = "none";
  } else {
    x1.style.display = "block";
  }
}

// скрывает/показывает блок сортироваки товаров
function sortMenu() {
  var x2 = document.getElementById("js-product-list-top");
    if (x2.style.display === "block") {
    x2.style.display = "none";
    document.getElementById("filters-button").style.backgroundColor = "RGB(230,230,230)";
  } else {
    x2.style.display = "block";
    document.getElementById("filters-button").style.backgroundColor = "white";
  }
}

//    $('.logo').click(
//        function() {
//        var bbq = document.documentElement.clientWidth;
//        alert (bbq);
//            }
//        );
//document.getElementById("classRight").setAttribute("style","display:none;");
    
function getQueryVariable(variable) /* забирает переменные с адресной get строки */
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}



$(document).ready(function() {  /* запускает слайдер, если только id продукта не 21 */
     
    if ( getQueryVariable("id_product") === 21 ) {
        return;
        }
        
        //если в гете есть категории - значит это страница категории - значит надо показывать кнопку сортировки
        var boooo = getQueryVariable("id_category");
        if (boooo) {
        document.getElementById("filters-block").style.display = "block";
        }
    
    var vwprcnt;
    var brwsrvw = document.documentElement.clientWidth;
    if (brwsrvw < 768) { zooba = 0 } 
    else if (brwsrvw < 1000) {
        var slidermargin = ( brwsrvw / 100 ) * 50 ; // выражает 50vw в пикселях
        var zooba = Math.trunc(slidermargin); // число пикселей делает целочисленным, без дробей
    }
    else {
        var slidermargin = ( brwsrvw / 100 ) * 30 ; // выражает 30vw в пикселях
        var zooba = Math.trunc(slidermargin); // число пикселей делает целочисленным, без дробей
    }

    window.onresize = function(event) {  // событие ресайза экрана браузера
        location.reload()               // перезагрузить страницу , чтобы задааптивить параметр slideMargin 
    }  
    
    $('#lightSlider').lightSlider({
        autoWidth:true,
        adaptiveHeight:false,
//        item:1.5,
        slideMargin:zooba, // расстояние между слайдерами 500-720p 900-1080p
        pager: false,
        loop:true,
//        responsive: [
//            {
//                breakpoint:1280,
//                settings: {
//                    item:1,
//                    sliderMargin:1
//                  }
//            }
//        ]
    });
    
});    
//    $('.logo').click(
//        function() {
//            var msgo = "неа"
//            console.log('збс');
//            var elems = document.getElementsByClassName("menu row");
//            for(var i=0; i<elems.length; i++) {
//                elems.getElementsByClassName("menu-depth")
//                if (!elems.firstChild) { msgo = "збс" }
////                msgo = elems;
////                if (!document.getElementsByClassName("menu-depth").Children.length) {
////                    msgo = document.getElementsByClassName("menu-depth").parentElement.Children[1].label;
////                }
//            }
//            
////            document.body.children[1].children[2].children[2].children[1].children[1]
////            msgo = 'ЗБС!';
////            if (!document.getElementsByClassName("menu-depth").childNodes.length) {
////                msgo = document.getElementsByClassName("menu-depth").parentElement.Choldren[1].label;
////            }
//            alert (msgo);
//    });
//    
//});

//for(var i=0; i<elems.length; i++)     правильный перебор элемендов DOM

//  $(document).ready(function() {
//    $('#lightSlider2').lightSlider({
//        autoWidth:true,
//        adaptiveHeight:false,
//        item:4,
//        slideMargin:0, // расстояние между слайдерами
//        pager: false,
//        loop:true
//    });
//});
