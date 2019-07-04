<?php

Class Product extends ProductCore {

    public $is_constructor;

    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null) {
        self::$definition['fields']['is_constructor'] = array('type' => self::HAS_ONE);
        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);
    }

}
