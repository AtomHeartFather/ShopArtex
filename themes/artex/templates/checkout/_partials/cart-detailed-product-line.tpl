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
{block name='cart_detailed_product_line'}
<div class="container no-gutters cart-list">
<div class="row no-gutters">
    <div class="col-8 cart-list-dropdown-text">
                <div>
                    <span class="product-name"><a href="{$product.url}" data-id_customization="{$product.id_customization|intval}">{$product.name}</a></span>
                    <br>
                    <span class="product-availability">{$product.availability}</span>
                    <span class="product-price">{$product.price}</span>
                    {if $product.unit_price_full}
                      <small class="sub">{$product.unit_price_full}</small>
                    {/if}
                    <br>
                    <div class="decrease-increase-quantity no-gutters">
                    {if $product.down_quantity_url}
                    <div class="decrease-product-quantity">    
                      <a href="{$product.down_quantity_url}" class="js-decrease-product-quantity no-gutters" data-link-action="update-quantity">-</a>
                    </div>  
                    {/if}
                    <span class="product-quantity">{$product.quantity}</span>
                    {if $product.up_quantity_url}
                    <div class="increase-product-quantity">    
                      <a href="{$product.up_quantity_url}" class="js-increase-product-quantity no-gutters" data-link-action="update-quantity">+</a>
                    </div>      
                    {/if}
                    </div>
                    <br>
                        {*<span class="product-price">
                            {if isset($product.is_gift) && $product.is_gift}
                              <span class="gift">{l s='Gift' d='Shop.Theme.Checkout'}</span>
                            {else}
                              {$product.total}
                            {/if}
                        </span>
                    <br>*}
                    
                      {foreach from=$product.attributes key="attribute" item="value"}
                        <span class="product-attributes">
                          <span class="label">{$attribute}:</span>
                          <span class="value">{$value}</span>
                        </span><br>
                      {/foreach}
                      <br>
                    {block name='cart_detailed_product_line_customization'}
                        {if is_array($product.customizations) && $product.customizations|count}
                          {foreach from=$product.customizations item="customization"}
                            {foreach from=$customization.fields item="field"}
                              <span class="product-line-info">
                                <span class="label">{$field.label}:</span>
                                <span class="value">
                                  {if $field.type == 'text'}
                                    {if $field.id_module}
                                      {$field.text nofilter}
                                    {else}
                                     {$field.text}
                                    {/if}
                                  {elseif $field.type == 'image'}
                                    <img src="{$field.image.small.url}">
                                  {/if}
                                </span>
                              </span>
                            {/foreach}
                          {/foreach}
                        {/if}
                    {/block}
                </div>
                    
                <div style="flex-grow: unset;" class="remove-from-cart-div">
                    <a
                        class="remove-from-cart"
                        data-link-action="remove-from-cart"
                        data-id-product="{$product.id_product|escape:'javascript'}"
                        data-id-product-attribute="{$product.id_product_attribute|escape:'javascript'}"
                        href="{$product.remove_from_cart_url}"
                        rel="nofollow"
                       >
                        {l s='Remove' d='Shop.Theme.Actions'}
                    </a>
                  {block name='hook_cart_extra_product_actions'}
                    {hook h='displayCartExtraProductActions' product=$product}
                  {/block}
                  
                  
                  
                </div>      
    </div>
    <div class="col-4 d-flex justify-content-end">
        <span class="product-image"><img src="{$product.cover.small.url}"></span>
    </div>    
</div>
</div>
{/block} 
{*{if $product.customizations|count}
    <div class="customizations">
        <ul>
            {foreach from=$product.customizations item="customization"}
                <li>
                    <span class="product-quantity">{$customization.quantity}</span>
                    <a href="{$customization.remove_from_cart_url}" class="remove-from-cart" rel="nofollow">{l s='Remove' d="Shop.Theme.Actions"}</a>
                    <ul>
                        {foreach from=$customization.fields item="field"}
                            <li>
                                <label>{$field.label}</label>
                                {if $field.type == 'text'}
                                    <span>{$field.text}</span>
                                {elseif $field.type == 'image'}
                                    <img src="{$field.image.small.url}">
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </li>
            {/foreach}
        </ul>
    </div>
{/if}*}

 
{*{block name='cart_detailed_product_line'}
+  <span class="product-image"><img src="{$product.cover.small.url}"></span>
+  <span class="product-name"><a href="{$product.url}" data-id_customization="{$product.id_customization|intval}">{$product.name}</a></span>
+  {foreach from=$product.attributes key="attribute" item="value"}
    <span class="product-attributes">
      <span class="label">{$attribute}:</span>
      <span class="value">{$value}</span>
    </span>
  {/foreach}

+  {block name='cart_detailed_product_line_customization'}
    {if is_array($product.customizations) && $product.customizations|count}
      {foreach from=$product.customizations item="customization"}
        {foreach from=$customization.fields item="field"}
          <span class="product-line-info">
            <span class="label">{$field.label}:</span>
            <span class="value">
              {if $field.type == 'text'}
                {if $field.id_module}
                  {$field.text nofilter}
                {else}
                 {$field.text}
                {/if}
              {elseif $field.type == 'image'}
                <img src="{$field.image.small.url}">
              {/if}
            </span>
          </span>
        {/foreach}
      {/foreach}
    {/if}
  {/block}

+  <span class="product-availability">{$product.availability}</span>
+  <span class="product-price">{$product.price}</span>
+  {if $product.unit_price_full}
    <small class="sub">{$product.unit_price_full}</small>
  {/if}

+  {if $product.down_quantity_url}
    <a href="{$product.down_quantity_url}" class="js-decrease-product-quantity" data-link-action="update-quantity">-</a>
  {/if}
+  <span class="product-quantity">{$product.quantity}</span>
+  {if $product.up_quantity_url}
    <a href="{$product.up_quantity_url}" class="js-increase-product-quantity" data-link-action="update-quantity">+</a>
  {/if}
+  <a
    class="remove-from-cart"
    data-link-action="remove-from-cart"
    data-id-product="{$product.id_product|escape:'javascript'}"
    data-id-product-attribute="{$product.id_product_attribute|escape:'javascript'}"
    href="{$product.remove_from_cart_url}"
    rel="nofollow"
   >
    {l s='Remove' d='Shop.Theme.Actions'}
  </a>

+  {block name='hook_cart_extra_product_actions'}
    {hook h='displayCartExtraProductActions' product=$product}
  {/block}

  <span class="product-price">
    {if isset($product.is_gift) && $product.is_gift}
      <span class="gift">{l s='Gift' d='Shop.Theme.Checkout'}</span>
    {else}
      {$product.total}
    {/if}
  </span>
{/block}*}