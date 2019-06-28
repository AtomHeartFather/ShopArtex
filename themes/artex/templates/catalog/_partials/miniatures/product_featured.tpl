{*<li>
    <img src="{$image.medium.url}" alt="{$image.legend}" title="{$image.legend}" width="{$product.cover.bySize.medium_default.width}" itemprop="image"> 
                        <!--    <img src="{$image.large.url}" alt="{$image.legend}">  -->
</li>*}

<li>
{*{block name='product_miniature_item'}
  <div class="col brdr no-gutters" >
<!--    <div class="container no-gutters">  
      <div class="row align-items-start"> -->
        <div class="col hover-block">
            <p>Top shit</p>
        </div>
<!--      </div> -->
<!--     <div class="row align-items-end"> -->
    <div class="col bottom-name">
          <p>{$product.name}<br>
          {$product.price}</p>
        </div>
        <div class="col bottom-color">
          <p>Такой-то цвет<br>
          Такие-то размеры</p>
        </div>
<!--      </div> -->*}

<!--  <article class="product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
-->
{*    {block name='product_thumbnail'}
      <a href="{$product.url}" >*}
        <img
          src = "{$product.cover.medium.url}"
          alt = "{$product.cover.legend}"
          data-full-size-image-url = "{$product.cover.large.url}"
          class="img-fluid"
          alt="{$product.name}"
          >
{*      </a>
    {/block}*}
<!--
    {block name='product_name'}
      <h1 class="h2" itemprop="name"><a href="{$product.url}">{$product.name}</a></h1>
    {/block}

    {block name='product_description_short'}
      <div class="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
    {/block}

    {block name='product_list_actions'}
      <div class="product-list-actions">
        {if $product.add_to_cart_url}
            <a
              class = "add-to-cart"
              href  = "{$product.add_to_cart_url}"
              rel   = "nofollow"
              data-id-product="{$product.id_product}"
              data-id-product-attribute="{$product.id_product_attribute}"
              data-link-action="add-to-cart"
            >{l s='Add to cart' d='Shop.Theme.Actions'}</a>
        {/if}
        {hook h='displayProductListFunctionalButtons' product=$product}
      </div>
    {/block}

    {block name='product_quick_view'}
    {/block}

    {block name='product_variants'}
      {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
    {/block}

    {block name='product_price_and_shipping'}
      {if $product.show_price}
        <div class="product-price-and-shipping">
          {if $product.has_discount}
            {hook h='displayProductPriceBlock' product=$product type="old_price"}

            <span class="regular-price">{$product.regular_price}</span>
            {if $product.discount_type === 'percentage'}
              <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
            {elseif $product.discount_type === 'amount'}
              <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
            {/if}
          {/if}

          {hook h='displayProductPriceBlock' product=$product type="before_price"}

          <span itemprop="price" class="price">{$product.price}</span>

          {hook h='displayProductPriceBlock' product=$product type="unit_price"}

          {hook h='displayProductPriceBlock' product=$product type="weight"}
        </div>
      {/if}
    {/block}

    {block name='product_flags'}
      <ul class="product-flags">
        {foreach from=$product.flags item=flag}
          <li class="{$flag.type}">{$flag.label}</li>
        {/foreach}
      </ul>
    {/block}

    {block name='product_availability'}
      {if $product.show_availability}
        {* availability may take the values "available" or "unavailable" *}
        <span class='product-availability {$product.availability}'>{$product.availability_message}</span>
      {/if}
    {/block}

    {hook h='displayProductListReviews' product=$product}

  </article> -->
{*  </div> 
<!--  </div>  -->  
{/block}*}
</li>