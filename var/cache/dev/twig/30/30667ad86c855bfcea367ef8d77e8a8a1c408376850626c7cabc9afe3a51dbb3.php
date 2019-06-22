<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig */
class __TwigTemplate_f4602961d22757457e662c8d57e7ba0c9b8fc9634cdd69ff205810525ed85eab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'administration_form_general' => array($this, 'block_administration_form_general'),
            'administration_form_upload_quota' => array($this, 'block_administration_form_upload_quota'),
            'administration_form_notifications' => array($this, 'block_administration_form_notifications'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig"));

        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", 27);
        // line 29
        list($context["generalForm"], $context["uploadQuotaForm"], $context["notificationsForm"]) =         array($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "general", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "upload_quota", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "notifications", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form")));
        echo "
  <div class=\"row justify-content-center\">
    ";
        // line 34
        $this->displayBlock('administration_form_general', $context, $blocks);
        // line 81
        echo "
    ";
        // line 82
        $this->displayBlock('administration_form_upload_quota', $context, $blocks);
        // line 122
        echo "
    ";
        // line 123
        $this->displayBlock('administration_form_notifications', $context, $blocks);
        // line 170
        echo "  </div>
  ";
        // line 171
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_administration_form_general($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "administration_form_general"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "administration_form_general"));

        // line 35
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_general\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", array(), "Admin.Global"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                ";
        // line 43
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Automatically check for module updates", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New modules and updates are displayed on the modules page.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "check_modules_update", array()), 'errors');
        echo "
                  ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "check_modules_update", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 50
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the cookie's IP address", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the IP address of the cookie in order to prevent your cookie from being stolen.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "check_ip_address", array()), 'errors');
        echo "
                  ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "check_ip_address", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 57
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lifetime of front office cookies", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the amount of hours during which the front office cookies are valid. After that amount of time, the customer will have to log in again.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "front_cookie_lifetime", array()), 'errors');
        echo "
                  ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "front_cookie_lifetime", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 64
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lifetime of back office cookies", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the amount of hours during which the back office cookies are valid. After that amount of time, the PrestaShop user will have to log in again.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "back_cookie_lifetime", array()), 'errors');
        echo "
                  ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "back_cookie_lifetime", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? $this->getContext($context, "generalForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 75
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

    // line 82
    public function block_administration_form_upload_quota($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "administration_form_upload_quota"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "administration_form_upload_quota"));

        // line 83
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_upload\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">file_upload</i> ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload quota", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                ";
        // line 91
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for attached files", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the maximum size allowed for attachment files (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", array("%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ATTACHMENT_MAXIMUM_SIZE")), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? $this->getContext($context, "uploadQuotaForm")), "max_size_attached_files", array()), 'errors');
        echo "
                  ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? $this->getContext($context, "uploadQuotaForm")), "max_size_attached_files", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 98
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for a downloadable product", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Define the upload limit for a downloadable product (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", array("%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_FILE_VALUE")), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? $this->getContext($context, "uploadQuotaForm")), "max_size_downloadable_product", array()), 'errors');
        echo "
                  ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? $this->getContext($context, "uploadQuotaForm")), "max_size_downloadable_product", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 105
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for a product's image", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Define the upload limit for an image (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", array("%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_IMAGE_VALUE")), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? $this->getContext($context, "uploadQuotaForm")), "max_size_product_image", array()), 'errors');
        echo "
                  ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? $this->getContext($context, "uploadQuotaForm")), "max_size_product_image", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["uploadQuotaForm"] ?? $this->getContext($context, "uploadQuotaForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 116
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

    // line 123
    public function block_administration_form_notifications($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "administration_form_notifications"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "administration_form_notifications"));

        // line 124
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_notifications\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">priority_high</i> ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">

              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 134
        echo $context["ps"]->getinfotip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications are numbered bubbles displayed at the very top of your back office, right next to the shop's name. They display the number of new items since you last clicked on them.", array(), "Admin.Advparameters.Help"));
        echo "
                </div>
              </div>

              <div class=\"form-group row\">
                ";
        // line 139
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new orders", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications when new orders are made in your shop.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? $this->getContext($context, "notificationsForm")), "show_notifs_new_orders", array()), 'errors');
        echo "
                  ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? $this->getContext($context, "notificationsForm")), "show_notifs_new_orders", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 146
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new customers", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications every time a new customer registers in your shop.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? $this->getContext($context, "notificationsForm")), "show_notifs_new_customers", array()), 'errors');
        echo "
                  ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? $this->getContext($context, "notificationsForm")), "show_notifs_new_customers", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 153
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new messages", array(), "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications when new messages are posted in your shop.", array(), "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? $this->getContext($context, "notificationsForm")), "show_notifs_new_messages", array()), 'errors');
        echo "
                  ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? $this->getContext($context, "notificationsForm")), "show_notifs_new_messages", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                </div>
              </div>
              ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["notificationsForm"] ?? $this->getContext($context, "notificationsForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 164
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
        return "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 164,  371 => 159,  365 => 156,  361 => 155,  356 => 153,  349 => 149,  345 => 148,  340 => 146,  333 => 142,  329 => 141,  324 => 139,  316 => 134,  306 => 127,  301 => 124,  292 => 123,  276 => 116,  268 => 111,  262 => 108,  258 => 107,  253 => 105,  246 => 101,  242 => 100,  237 => 98,  230 => 94,  226 => 93,  221 => 91,  213 => 86,  208 => 83,  199 => 82,  183 => 75,  175 => 70,  169 => 67,  165 => 66,  160 => 64,  153 => 60,  149 => 59,  144 => 57,  137 => 53,  133 => 52,  128 => 50,  121 => 46,  117 => 45,  112 => 43,  104 => 38,  99 => 35,  90 => 34,  78 => 171,  75 => 170,  73 => 123,  70 => 122,  68 => 82,  65 => 81,  63 => 34,  57 => 32,  48 => 31,  38 => 25,  36 => 29,  34 => 27,  11 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% set generalForm, uploadQuotaForm, notificationsForm = form.general, form.upload_quota, form.notifications %}

{% block content %}
  {{ form_start(form, {'attr' : {'class': 'form'} }) }}
  <div class=\"row justify-content-center\">
    {% block administration_form_general %}
      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_general\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i> {{ 'General'|trans({}, 'Admin.Global') }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Automatically check for module updates'|trans), ('New modules and updates are displayed on the modules page.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(generalForm.check_modules_update) }}
                  {{ form_widget(generalForm.check_modules_update, {'attr' : {'class': 'custom-select'} }) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help((\"Check the cookie's IP address\"|trans), ('Check the IP address of the cookie in order to prevent your cookie from being stolen.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(generalForm.check_ip_address) }}
                  {{ form_widget(generalForm.check_ip_address, {'attr' : {'class': 'custom-select'} }) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Lifetime of front office cookies'|trans), ('Set the amount of hours during which the front office cookies are valid. After that amount of time, the customer will have to log in again.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(generalForm.front_cookie_lifetime) }}
                  {{ form_widget(generalForm.front_cookie_lifetime) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Lifetime of back office cookies'|trans), ('Set the amount of hours during which the back office cookies are valid. After that amount of time, the PrestaShop user will have to log in again.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(generalForm.back_cookie_lifetime) }}
                  {{ form_widget(generalForm.back_cookie_lifetime) }}
                </div>
              </div>
              {{ form_rest(generalForm) }}
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

    {% block administration_form_upload_quota %}
      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_upload\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">file_upload</i> {{ 'Upload quota'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Maximum size for attached files'|trans), ('Set the maximum size allowed for attachment files (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).'|trans({'%size%': 'PS_ATTACHMENT_MAXIMUM_SIZE'|configuration}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(uploadQuotaForm.max_size_attached_files) }}
                  {{ form_widget(uploadQuotaForm.max_size_attached_files) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Maximum size for a downloadable product'|trans), ('Define the upload limit for a downloadable product (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).'|trans({'%size%': 'PS_LIMIT_UPLOAD_FILE_VALUE'|configuration}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(uploadQuotaForm.max_size_downloadable_product) }}
                  {{ form_widget(uploadQuotaForm.max_size_downloadable_product) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help((\"Maximum size for a product's image\"|trans), ('Define the upload limit for an image (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).'|trans({'%size%': 'PS_LIMIT_UPLOAD_IMAGE_VALUE'|configuration}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(uploadQuotaForm.max_size_product_image) }}
                  {{ form_widget(uploadQuotaForm.max_size_product_image) }}
                </div>
              </div>
              {{ form_rest(uploadQuotaForm) }}
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

    {% block administration_form_notifications %}
      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"configuration_fieldset_notifications\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">priority_high</i> {{ 'Notifications'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">

              <div class=\"row\">
                <div class=\"col\">
                  {{ ps.infotip(\"Notifications are numbered bubbles displayed at the very top of your back office, right next to the shop's name. They display the number of new items since you last clicked on them.\"|trans({}, 'Admin.Advparameters.Help')) }}
                </div>
              </div>

              <div class=\"form-group row\">
                {{ ps.label_with_help(('Show notifications for new orders'|trans), (\"This will display notifications when new orders are made in your shop.\"|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(notificationsForm.show_notifs_new_orders) }}
                  {{ form_widget(notificationsForm.show_notifs_new_orders, {'attr' : {'class': 'custom-select'} }) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Show notifications for new customers'|trans), ('This will display notifications every time a new customer registers in your shop.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(notificationsForm.show_notifs_new_customers) }}
                  {{ form_widget(notificationsForm.show_notifs_new_customers, {'attr' : {'class': 'custom-select'} }) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Show notifications for new messages'|trans), ('This will display notifications when new messages are posted in your shop.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(notificationsForm.show_notifs_new_messages) }}
                  {{ form_widget(notificationsForm.show_notifs_new_messages, {'attr' : {'class': 'custom-select'} }) }}
                </div>
              </div>
              {{ form_rest(notificationsForm) }}
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
  </div>
  {{ form_end(form) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", "/var/www/artex/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/administration.html.twig");
    }
}
