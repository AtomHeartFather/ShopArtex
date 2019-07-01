<?php

include_once(dirname(__FILE__).'/classes/AttachmentModels.php');

if (!defined('_PS_VERSION_')) {
    exit;
}

class Threejsviewport extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'threejsviewport';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'EgorEgor';
        $this->need_instance = 1;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Threejs Viewport');
        $this->description = $this->l('Show 3d models in product page');

        $this->confirmUninstall = $this->l('');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('THREEJSVIEWPORT_IS_INSTALL', true);
        Configuration::updateValue('THREEJSVIEWPORT_LIVE_MODE', false);

        include(dirname(__FILE__).'/sql/install.php');

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('displayHeader') &&
            $this->registerHook('actionAdminProductsControllerSaveBefore');
    }

    public function uninstall()
    {
        Configuration::deleteByName('THREEJSVIEWPORT_IS_INSTALL');
        Configuration::deleteByName('THREEJSVIEWPORT_LIVE_MODE');

        include(dirname(__FILE__).'/sql/uninstall.php');

        return parent::uninstall();
    }

    public function hookActionAdminProductsControllerSaveBefore($params)
{
        
   $productAdapter = $this->get('prestashop.adapter.data_provider.product');
    $product = $productAdapter->getProduct($_REQUEST['form']['id_product']);
    $models = new AttachmentModels();
    $models->description = 'descript';
    $models->attachProduct(22);
    $models->getFields();
    //AttachmentModels::deleteProductAttachments($_REQUEST['form']['id_product']);
//   $product->is_constructor = "qqq";
//  
//    $product->save();
}

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitThreejsviewportModule')) == true) {
            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output.$this->renderForm();
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitThreejsviewportModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Live mode'),
                        'name' => 'THREEJSVIEWPORT_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Use this module in live mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'desc' => $this->l('Enter a valid email address'),
                        'name' => 'THREEJSVIEWPORT_ACCOUNT_EMAIL',
                        'label' => $this->l('Email'),
                    ),
                    array(
                        'type' => 'password',
                        'name' => 'THREEJSVIEWPORT_ACCOUNT_PASSWORD',
                        'label' => $this->l('Password'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'THREEJSVIEWPORT_LIVE_MODE' => Configuration::get('THREEJSVIEWPORT_LIVE_MODE', true),
            'THREEJSVIEWPORT_ACCOUNT_EMAIL' => Configuration::get('THREEJSVIEWPORT_ACCOUNT_EMAIL', 'contact@prestashop.com'),
            'THREEJSVIEWPORT_ACCOUNT_PASSWORD' => Configuration::get('THREEJSVIEWPORT_ACCOUNT_PASSWORD', null),
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addJS($this->_path.'views/js/back.js');
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
//         $this->context->controller->addJS($this->_path.'/views/js/front.js');
//         $this->context->controller->addCSS($this->_path.'/views/css/front.css');
        
        
    }

    public function hookDisplayHeader()
    {
        // Only on product page
            if ('product' === $this->context->controller->php_self && '21' === Tools::getValue('id_product')) {
                
                $this->context->controller->registerJavascript(
                    'threejs',
                    'modules/'.$this->name.'/views/js/three.min.js',
                    [
                      'attribute' => 'async'
                    ]
                );
               
                $this->context->controller->registerJavascript(
                    'orbitcontrols',
                    'modules/'.$this->name.'/views/js/OrbitControls.js',
                    [
                      'attribute' => 'async'
                    ]
                );
                
                $this->context->controller->registerJavascript(
                    'gltfloader',
                    'modules/'.$this->name.'/views/js/GLTFLoader.js',
                    [
                      'attribute' => 'async'
                    ]
                );
                
                $this->context->controller->registerJavascript(
                    'threejsdisplay',
                    'modules/'.$this->name.'/views/js/threejs_display.js',
                    [
                      'priority' => 200,
                      'attribute' => 'defer'
                    ]
                );
            }
    }
}
