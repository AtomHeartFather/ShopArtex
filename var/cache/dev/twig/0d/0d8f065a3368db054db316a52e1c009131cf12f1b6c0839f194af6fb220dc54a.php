<?php

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig */
class __TwigTemplate_d785f98b2eb1c41211eeaa2873e298d9ea1003c584bf7e1ac474c9a6831f80aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_preferences_stock' => array($this, 'block_product_preferences_stock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('product_preferences_stock', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_product_preferences_stock($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_preferences_stock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_preferences_stock"));

        // line 30
        echo "<div class=\"col-xl-10\">
  <div class=\"card\" id=\"configuration_fieldset_stock\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">shop</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products stock", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          ";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow ordering of out-of-stock products", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By default, the Add to Cart button is hidden when a product is unavailable. You can choose to have it displayed in all cases.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "allow_ordering_oos", array()), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "allow_ordering_oos", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable stock management", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", array()), 'errors');
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of in-stock products", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", array()), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "in_stock_label", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of out-of-stock products with allowed backorders", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_allowed_backorders", array()), 'errors');
        echo "
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_allowed_backorders", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of out-of-stock products with denied backorders", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_denied_backorders", array()), 'errors');
        echo "
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_denied_backorders", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 81
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery time of in-stock products", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advised for European merchants to be legally compliant (eg: Delivered within 3-4 days)", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "delivery_time", array()), 'errors');
        echo "
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "delivery_time", array()), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</small>
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 89
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery time of out-of-stock products with allowed backorders", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advised for European merchants to be legally compliant (eg: Delivered within 5-7 days)", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_delivery_time", array()), 'errors');
        echo "
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_delivery_time", array()), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</small>
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 97
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default pack stock management", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When selling packs of products, how do you want your stock to be calculated?", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "pack_stock_management", array()), 'errors');
        echo "
            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "pack_stock_management", array()), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 107,  202 => 100,  198 => 99,  193 => 97,  186 => 93,  182 => 92,  178 => 91,  173 => 89,  166 => 85,  162 => 84,  158 => 83,  153 => 81,  146 => 77,  142 => 76,  136 => 73,  128 => 68,  124 => 67,  118 => 64,  110 => 59,  106 => 58,  100 => 55,  92 => 50,  88 => 49,  82 => 46,  74 => 41,  70 => 40,  65 => 38,  57 => 33,  52 => 30,  34 => 29,  31 => 28,  29 => 27,  26 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% trans_default_domain \"Admin.Shopparameters.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block product_preferences_stock %}
<div class=\"col-xl-10\">
  <div class=\"card\" id=\"configuration_fieldset_stock\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">shop</i> {{ 'Products stock'|trans }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          {{ ps.label_with_help(('Allow ordering of out-of-stock products'|trans), ('By default, the Add to Cart button is hidden when a product is unavailable. You can choose to have it displayed in all cases.'|trans({}, 'Admin.Shopparameters.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(stockForm.allow_ordering_oos) }}
            {{ form_widget(stockForm.allow_ordering_oos) }}
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Enable stock management'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(stockForm.stock_management) }}
            {{ form_widget(stockForm.stock_management) }}
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Label of in-stock products'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(stockForm.stock_management) }}
            {{ form_widget(stockForm.in_stock_label) }}
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Label of out-of-stock products with allowed backorders'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(stockForm.oos_allowed_backorders) }}
            {{ form_widget(stockForm.oos_allowed_backorders) }}
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Label of out-of-stock products with denied backorders'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(stockForm.oos_denied_backorders) }}
            {{ form_widget(stockForm.oos_denied_backorders) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help(('Delivery time of in-stock products'|trans), ('Advised for European merchants to be legally compliant (eg: Delivered within 3-4 days)'|trans({}, 'Admin.Shopparameters.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(stockForm.delivery_time) }}
            {{ form_widget(stockForm.delivery_time) }}
            <small class=\"form-text\">{{ 'Leave empty to disable'|trans }}</small>
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help(('Delivery time of out-of-stock products with allowed backorders'|trans), ('Advised for European merchants to be legally compliant (eg: Delivered within 5-7 days)'|trans({}, 'Admin.Shopparameters.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(stockForm.oos_delivery_time) }}
            {{ form_widget(stockForm.oos_delivery_time) }}
            <small class=\"form-text\">{{ 'Leave empty to disable'|trans }}</small>
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help(('Default pack stock management'|trans), ('When selling packs of products, how do you want your stock to be calculated?'|trans({}, 'Admin.Shopparameters.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(stockForm.pack_stock_management) }}
            {{ form_widget(stockForm.pack_stock_management) }}
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig", "/var/www/artex/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig");
    }
}
