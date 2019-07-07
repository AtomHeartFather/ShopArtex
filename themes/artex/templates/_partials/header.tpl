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
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <div class="d-flex nav-block flex-row justify-content-between no-gutters mr-2">
    {block name='header_logo'}
        <a class="logo" href="{$urls.base_url}" title="{$shop.name}">
            <img src="{$shop.logo}" alt="{$shop.name}">
        </a>
    {/block}
    <div class="row menu-left header-left-side no-gutters col-xl-8 col-lg-8 col-md-7 col-sm-2 col-1">
        {hook h='displayTopMenu'} 
    </div>   
    <div class="row menu-right justify-content-end header-right-side no-gutters col-xl-3 col-lg-3 col-md-4 col-sm-10 col-10"> 
        {*{hook h='displayNav'}*}
    </div>
    <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
        <i class="fa fa-bars"></i>
    </a>
  </div>
{/block}

{block name='header_top'}
{*  <div class="header-top">
  </div>*}
  {hook h='displayNavFullWidth'}
{/block}
