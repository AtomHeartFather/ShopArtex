{*
* This template is used to display additional information from the modules and is regenerated with each ajax call.
* See ProductController::displayAjaxRefresh()
*}
<div class="product-additional-info">
    {hook h='displayProductAdditionalInfo' product=$product}
    <div id="qqq">
        <input id="model_link" name="model_link" type="hidden" value="{url entity='attachment' params=['id_attachment' => $product.model_id]}">
    </div>
</div>
