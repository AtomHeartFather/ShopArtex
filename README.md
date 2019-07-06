#### Артекс ####


# Журнал проекта
https://docs.google.com/document/d/17yKn1qrYK-Qrl6YO5InOmvvPEW2hqdG-QfQx2AmBACw/edit?usp=sharing

# Доступ к хостингу, админка магазина
https://docs.google.com/document/d/18q8aRrUm42jBpnlUo82Smub7ioXKcB-6OU0cKNkElCM/edit

# Миграция проекта на локальный комп:
1. git clone ssh://git-codecommit.eu-west-1.amazonaws.com/v1/repos/artex artex
2. появиться папка артекс с проектом, в корне есть дамп базы
3. базу создать пустую artex - дамп туда
4. app/config/parameters.php ->
    'database_host' => '127.0.0.1',
    'database_port' => '',
    'database_name' => 'artex',
    'database_user' => 'artex',
    'database_password' => '123',

# Миграция локального проекта на хостинг
1. app/config/parameters.php ---------------------------------
    'database_host' => 'localhost',
    'database_port' => '',
    'database_name' => 'artex73_prsh1',
    'database_user' => 'artex73_prsh1',
    'database_password' => '9GbFnix*',
    'database_prefix' => 'ps_',
2. Отредактировать базу так:-----------------------------------
    ps_shop_url
    domain/domain_ssl = artex73.beget.tech 
    physical_uri = /
    ps_configuration:
    PS_SHOP_DOMAIN artex73.beget.tech
    PS_SHOP_DOMAIN_SSL artex73.beget.tech
    PS_SHOP_SHOP_NAME artex
3. При миграции на хостинг для модуля добавить столбец---------
    is_construstor типа tinyint размером 1 в таблицу ps_product 

# Обновить theme.yml
If you want reload your configuration :
1.Modify your theme.yml
2.Delete the file into ROOT_FOLDER/config/themes/your theme/shop*.json
3.Refresh your page, prestashop going to regenerate the config json file for your theme

# Соотношение сторон изображений для наполнения магазина использовать 1.5


ssh artex73@artex73.beget.tech
WRhEnnHv
