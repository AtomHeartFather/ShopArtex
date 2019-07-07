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

function mobileMenu() {
  var x1 = document.getElementById("mLeft");
    if (x1.style.display === "block") {
    x1.style.display = "none";
  } else {
    x1.style.display = "block";
  }
}

//    $('.logo').click(
//        function() {
//            var div = document.getElementsByClassName("menu-left");
//            if (div[0].attributes[1].nodeValue === "block") {
//            alert("div[0].attributes[1].nodeValue");
//            }
//        });
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
     
    if ( getQueryVariable("id_product") == 21 ) {
        return;
        } 
     
    $('#lightSlider').lightSlider({
        autoWidth:true,
        adaptiveHeight:true,
        item:1.5,
        slideMargin:500, // расстояние между слайдерами 500-720p 900-1080p
        pager: false,
        loop:true
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
