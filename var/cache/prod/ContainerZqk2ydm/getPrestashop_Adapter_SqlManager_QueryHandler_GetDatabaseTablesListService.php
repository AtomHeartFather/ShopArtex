<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.sql_manager.query_handler.get_database_tables_list' shared service.

return $this->services['prestashop.adapter.sql_manager.query_handler.get_database_tables_list'] = new \PrestaShop\PrestaShop\Adapter\SqlManager\QueryHandler\GetDatabaseTablesListHandler(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'});
