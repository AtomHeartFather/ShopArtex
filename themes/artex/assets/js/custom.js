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
    
function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
    
  
    
  $(document).ready(function() {
     
     if ( getQueryVariable("id_product") == 21 ) {
        return;
        } 
     
    $('#lightSlider').lightSlider({
        autoWidth:true,
        adaptiveHeight:false,
        item:1.5,
        slideMargin:500, // расстояние между слайдерами 500-720p 900-1080p
        pager: false,
        loop:true
    });
});

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
