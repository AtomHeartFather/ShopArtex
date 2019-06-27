<?php
Class Product extends ProductCore {
    /*
    * module: threejsviewport
    * date: 2019-06-27 17:03:17
    * version: 1.0.0
    */
    public $is_constructor;
    /*
    * module: threejsviewport
    * date: 2019-06-27 17:03:17
    * version: 1.0.0
    */
    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null) {
        self::$definition['fields']['is_constructor'] = array('type' => self::TYPE_STRING, 'validate' => 'isString');
        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);
    }
}
