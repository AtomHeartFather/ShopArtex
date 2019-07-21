<div class="container cart-list-dropdown-body">
<div class="row no-gutters">
    <div class="col-8 cart-list-dropdown-text">
                <div>
                    <span class="product-name">{$product.name}</span>
                    <br>
                    <span class="product-quantity">{$product.quantity}</span><span class="product-price">{$product.price}</span>
                    <br>
                    <br>
                      {foreach from=$product.attributes key="attribute" item="value"}
                        <span class="product-attributes">
                          <span class="label">{$attribute}:</span>
                          <span class="value">{$value}</span>
                        </span><br>
                      {/foreach}
                </div>      
                <div style="flex-grow: unset;">
                    <a  class="remove-from-cart-"
                        rel="nofollow"
                        href="{$product.remove_from_cart_url}"
                        data-link-action="remove-from-cart"
                    >
                        {l s="Remove" d="Shop.Theme.Actions"}
                    </a>
                </div>      
    </div>
    <div class="col-4 d-flex justify-content-end">
        <span class="product-image"><img src="{$product.cover.small.url}"></span>
    </div>    
</div>
        
{if $product.customizations|count}
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
{/if}
</div>