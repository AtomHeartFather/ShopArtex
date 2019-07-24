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
<!doctype html>
<html lang="{$language.iso_code}">
    
  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>

  <body id="{$page.page_name}" class="{$page.body_classes|classnames}">

    <header id="header">
      {block name='header'}
        {include file='checkout/_partials/header.tpl'}
      {/block}
    </header>
    <style type="text/css">
        #header { position: fixed; z-index: 100; width: 100%; }
        #content { top: 32px; }
        .checkout-column-3 { position: fixed; top: 32px; left: 75%; height:100%; }
        @media (max-width: 1000px) {
            .checkout-column-3 { left: 66% }
        }
        @media (max-width: 768px) {
            .checkout-column-3 { position: inherit; top: 0; }
            .checkout-main input { width: 100%;}
        }
    </style>  
    {block name='notifications'}
      {include file='_partials/notifications.tpl'}
    {/block}
    
    {block name='content'}
      <section id="content">
      <div class="checkout-main row no-gutters">    
        <div class='checkout-column-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12'>
            <p></p>
        </div>
        <div class='checkout-column-2 col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12'>
            {block name='cart_summary'}
              {render file='checkout/checkout-process.tpl' ui=$checkout_process}
            {/block}
        </div>
        <div class='checkout-column-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12'>
            {block name='cart_summary'}
              {include file='checkout/_partials/cart-summary.tpl' cart=$cart}
            {/block}
        </div>
      </div>  
      </section>
    {/block}

    {*<footer id="footer">*}
      {block name='footer'}
        {include file='checkout/_partials/footer.tpl'}
      {/block}
    {*</footer>*}

    {block name='javascript_bottom'}
      {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}

  </body>

</html>
