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
{extends file='page.tpl'}

{block name='page_title'}
  {l s='Your addresses' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content_container'}
<section id="content" class="page-content page-addresses row justify-content-center">
    
  <div class="col-7 row no-gutters mb-3 mt-3">
      
  

  {foreach $customer.addresses as $address}
    {block name='customer_address'}
      {include file='customer/_partials/block-address.tpl' address=$address}
    {/block}
  {/foreach}
  
  <div class="col-12 row mb-3 no-gutters add-address-btn">
  
  
  <footer class="col-12 row no-gutters">
      {*<div >*}
        <div class="col-6 pl-1 pr-1">
            <a href="http://localhost/artex/index.php?controller=my-account" rel="nofollow">
                <button>Назад</button>
            </a>  
        </div>
        <div class="col-6 pl-1 pr-1">
            <a href="{$urls.pages.address}" data-link-action="add-address">
                <button>{l s='Create new address' d='Shop.Theme.Actions'}</button>
            </a>
        </div>
      {*</div>*}
  </footer>
  
  </div>
  </div>
  
  </div>
    
</section>
{/block}
