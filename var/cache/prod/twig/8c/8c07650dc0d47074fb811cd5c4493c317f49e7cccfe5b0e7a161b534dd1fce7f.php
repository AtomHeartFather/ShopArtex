<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig */
class __TwigTemplate_22a8fc1feca9818adc07019d342e2341cdccc768711a4c1c8b3b1eb23c7f87cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'import_file_history_block' => array($this, 'block_import_file_history_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 26);
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? null), 'form_start', array("attr" => array("data-file-upload-url" => ($context["importFileUploadUrl"] ?? null), "data-delete-confirm-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure that you would like to delete this entity:", array(), "Admin.Advparameters.Notification"), "class" => "js-import-form")));
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can read information on import at:", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http://doc.prestashop.com/display/PS17/Import", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "\" class=\"_blank\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http://doc.prestashop.com/display/PS17/Import", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </a>
      </p>
      <p class=\"alert-text\">
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more about the CSV format at:", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "\" class=\"_blank\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </a>
      </p>
    </div>

    <hr>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("What do you want to import?", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "entity", array()), 'errors');
        echo "
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "entity", array()), 'widget', array("attr" => array("class" => "js-entity-select")));
        echo "
    </div>

    <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
      <ul>
        <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that the Category import does not support having two categories with the same name.", array(), "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
        <li>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that you can have several products with the same reference.", array(), "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      </ul>
    </div>

    <hr>

    <div class=\"form-group hidden-xs-up\">
      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "csv", array()), 'errors');
        echo "
      ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "csv", array()), 'widget', array("attr" => array("class" => "js-import-file-input")));
        echo "
    </div>

    <div class=\"form-group js-file-upload-form-group\">
      <label class=\"form-control-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select a file to import", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "file", array()), 'errors');
        echo "
      ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "file", array()), 'widget', array("attr" => array("class" => "js-import-file", "data-max-file-upload-size" => ($context["maxFileUploadSize"] ?? null))));
        echo "
      <span>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", array(), "Admin.Global"), "html", null, true);
        echo "</span>
      <button type=\"button\"
              class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
              ";
        // line 79
        if (twig_test_empty(($context["importFileNames"] ?? null))) {
            echo "disabled";
        }
        // line 80
        echo "      >
        <span class=\"badge badge-primary js-files-history-number\">";
        // line 81
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["importFileNames"] ?? null)), "html", null, true);
        echo "</span>
        ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose from history / FTP", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </button>
      <small class=\"form-text\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      <small class=\"form-text\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only UTF-8 and ISO 8859-1 encodings are allowed", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      <small class=\"form-text\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can also upload your file via FTP to the following directory: %s .", array("%s" => ($context["importDirectory"] ?? null)), "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
    </div>

    <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
      <p class=\"alert-text\">
        <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
      </p>
    </div>

    <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
      <button type=\"button\"
              class=\"close btn btn-outline-secondary js-change-import-file-btn\"
              aria-label=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", array(), "Admin.Actions"), "html", null, true);
        echo "\"
      >
        <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
      </button>
      <p class=\"alert-text js-import-file\"></p>
    </div>

    ";
        // line 105
        $this->displayBlock('import_file_history_block', $context, $blocks);
        // line 108
        echo "
    <hr>

    <div class=\"form-group\">
      ";
        // line 112
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language of the file", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The locale must be installed", array(), "Admin.Advparameters.Notification"));
        echo "
      ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "iso_lang", array()), 'errors');
        echo "
      ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "iso_lang", array()), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Field separator", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "separator", array()), 'errors');
        echo "
      ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "separator", array()), 'widget');
        echo "
      <small class=\"form-text\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("e.g. ", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo " 1; Blouse; 129.90; 5</small>
    </div>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multiple value separator", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "multiple_value_separator", array()), 'errors');
        echo "
      ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "multiple_value_separator", array()), 'widget');
        echo "
      <small class=\"form-text\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("e.g. ", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo " Blouse; red.jpg, blue.jpg, green.jpg; 129.90</small>
    </div>

    <hr>

    <div class=\"form-group js-truncate-form-group\">
      <label class=\"form-control-label\">
        ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete all [1]categories[/1] before import", array("[1]" => "<span class=\"js-entity-name\">", "[/1]" => "</span>"), "Admin.Advparameters.Feature");
        echo "
      </label>
      ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "truncate", array()), 'errors');
        echo "
      ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "truncate", array()), 'widget');
        echo "
    </div>

    <div class=\"form-group js-match-ref-form-group\">
      ";
        // line 142
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use product reference as key", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, the product's reference number MUST be unique!", array(), "Admin.Advparameters.Help"));
        echo "
      ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "match_ref", array()), 'errors');
        echo "
      ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "match_ref", array()), 'widget');
        echo "
    </div>

    <div class=\"form-group js-regenerate-form-group\">
      <label class=\"form-control-label\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Skip thumbnails regeneration", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "regenerate", array()), 'errors');
        echo "
      ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "regenerate", array()), 'widget');
        echo "
    </div>

    <div class=\"form-group js-force-ids-form-group\">
      ";
        // line 154
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Force all ID numbers", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you enable this option, your imported items' ID number will be used as is. If you do not enable this option, the imported ID numbers will be ignored, and PrestaShop will instead create auto-incremented ID numbers for all the imported items.", array(), "Admin.Advparameters.Help"));
        echo "
      ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "forceIDs", array()), 'errors');
        echo "
      ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "forceIDs", array()), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
      ";
        // line 160
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send notification email", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sends an email to let you know your import is complete. It can be useful when handling large files, as the import may take some time.", array(), "Admin.Advparameters.Help"));
        echo "
      ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "sendemail", array()), 'errors');
        echo "
      ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "sendemail", array()), 'widget');
        echo "
    </div>

    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importForm"] ?? null), 'rest');
        echo "
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"submitImportFile\">
        ";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next step", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        <i class=\"material-icons\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
";
        // line 176
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 105
    public function block_import_file_history_block($context, array $blocks = array())
    {
        // line 106
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 106)->display($context);
        // line 107
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 107,  349 => 106,  346 => 105,  340 => 176,  331 => 170,  323 => 165,  317 => 162,  313 => 161,  309 => 160,  302 => 156,  298 => 155,  294 => 154,  287 => 150,  283 => 149,  279 => 148,  272 => 144,  268 => 143,  264 => 142,  257 => 138,  253 => 137,  248 => 135,  238 => 128,  234 => 127,  230 => 126,  226 => 125,  219 => 121,  215 => 120,  211 => 119,  207 => 118,  200 => 114,  196 => 113,  192 => 112,  186 => 108,  184 => 105,  174 => 98,  159 => 86,  155 => 85,  151 => 84,  146 => 82,  142 => 81,  139 => 80,  135 => 79,  129 => 76,  125 => 75,  121 => 74,  117 => 73,  110 => 69,  106 => 68,  96 => 61,  92 => 60,  84 => 55,  80 => 54,  76 => 53,  65 => 45,  61 => 44,  57 => 43,  50 => 39,  46 => 38,  42 => 37,  34 => 32,  28 => 29,  25 => 28,  23 => 26,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "/home/a/artex73/artex/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig");
    }
}
