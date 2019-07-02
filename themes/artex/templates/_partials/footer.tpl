{**
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
 *}
 <div class="artex-footer container-fluid">
     <div class="gray-footer row">
         <div class="footer-4 col-3">
             <div class="footer-block">
                 <p class="footer-ul-label">Список футера</p>
                 <ul>
                     <li>Пункт списка</li>
                     <li>Второй пунк</li>
                     <li>Третий пункт списка</li>
                     <li>Ну и послений 4ый пункт</li>
                 </ul>
             </div>
         </div>
         <div class="footer-4 col-3">
             <div class="footer-block">
                 <p class="footer-ul-label">Список футера</p>
                 <ul>
                     <li>Пункт списка</li>
                     <li>Второй пунк</li>
                     <li>Третий пункт списка</li>
                     <li>Ну и послений 4ый пункт</li>
                 </ul>
             </div>
         </div>
         <div class="footer-4 col-3">
             <div class="footer-block">
                 <p class="footer-ul-label">Список футера</p>
                 <ul>
                     <li>Пункт списка</li>
                     <li>Второй пунк</li>
                     <li>Третий пункт списка</li>
                     <li>Ну и послений 4ый пункт</li>
                 </ul>
             </div>
         </div>
         <div class="footer-4 col-3">
             <div class="footer-block">
                 <p class="footer-ul-label">Список футера</p>
                 <ul>
                     <li>Пункт списка</li>
                     <li>Второй пунк</li>
                     <li>Третий пункт списка</li>
                     <li>Ну и послений 4ый пункт</li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="black-footer row justify-content-center align-items-center">
         <div class="black-logo">
            <a href="#">
                <img src="themes/artex/assets/img/Black_logo.png"
            </a>
         </div>    
     </div>
 </div> 
{*{block name='hook_footer_before'}
  {hook h='displayFooterBefore'}
{/block}

{block name='hook_footer'}
  {hook h='displayFooter'} //Контактная информация
{/block}*}

{*{block name='hook_footer_after'}
  {hook h='displayFooterAfter'}
{/block}

<p>
  {block name='copyright_link'}
    <a class="_blank" href="http://www.prestashop.com" target="_blank">
      {l s='%copyright% %year% - Ecommerce software by %prestashop%'
      sprintf=['%prestashop%' => 'PrestaShop™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
    </a>
  {/block}
</p>*}
