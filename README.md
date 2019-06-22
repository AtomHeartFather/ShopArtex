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

# Обновить theme.yml
If you want reload your configuration :
1.Modify your theme.yml
2.Delete the file into ROOT_FOLDER/config/themes/your theme/shop*.json
3.Refresh your page, prestashop going to regenerate the config json file for your theme
