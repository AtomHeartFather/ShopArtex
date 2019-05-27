<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig */
class __TwigTemplate_220d11264abc4acc9b4b6a91ba1a05286dfce07ce31e08acccc8458a3da57b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", 26);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'import_panel' => array($this, 'block_import_panel'),
            'import_available_fields' => array($this, 'block_import_available_fields'),
            'import_sample_files' => array($this, 'block_import_sample_files'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        if ((isset($context["importForm"]) || array_key_exists("importForm", $context))) {
            // line 31
            echo "    <div class=\"row row justify-content-center\">
      <div class=\"col-xl-10\">
        <div class=\"row\">
          <div class=\"col-12 col-md-8\">
            ";
            // line 35
            $this->displayBlock('import_panel', $context, $blocks);
            // line 38
            echo "          </div>

          <div class=\"col-12 col-md-4\">
            ";
            // line 41
            $this->displayBlock('import_available_fields', $context, $blocks);
            // line 44
            echo "
            ";
            // line 45
            $this->displayBlock('import_sample_files', $context, $blocks);
            // line 48
            echo "          </div>
        </div>
      </div>
    </div>
  ";
        }
    }

    // line 35
    public function block_import_panel($context, array $blocks = array())
    {
        // line 36
        echo "              ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", 36)->display($context);
        // line 37
        echo "            ";
    }

    // line 41
    public function block_import_available_fields($context, array $blocks = array())
    {
        // line 42
        echo "              ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", 42)->display($context);
        // line 43
        echo "            ";
    }

    // line 45
    public function block_import_sample_files($context, array $blocks = array())
    {
        // line 46
        echo "              ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", 46)->display($context);
        // line 47
        echo "            ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/imports.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 58,  100 => 56,  97 => 55,  93 => 47,  90 => 46,  87 => 45,  83 => 43,  80 => 42,  77 => 41,  73 => 37,  70 => 36,  67 => 35,  58 => 48,  56 => 45,  53 => 44,  51 => 41,  46 => 38,  44 => 35,  38 => 31,  35 => 30,  32 => 29,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", "/home/a/artex73/artex/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig");
    }
}
