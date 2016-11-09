<?php

use Cake\Core\Plugin;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Gourmet\Aroma\Core\Configure\Engine\DbConfig;

Plugin::load('Gourmet/KnpMenu');
Plugin::load('Gourmet/Aroma');
Plugin::load('Ajax', ['bootstrap' => true]);

Configure::load('KingLoui/BaseKit.basekit');
Configure::config('BaseKit', new DbConfig(TableRegistry::get('KingLoui/BaseKit.Configurations')));

Configure::load('BaseKit', 'BaseKit');