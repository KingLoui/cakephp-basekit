<?php

use Cake\Core\Plugin;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Gourmet\Aroma\Core\Configure\Engine\DbConfig;

Plugin::load('Gourmet/KnpMenu');
Plugin::load('Gourmet/Aroma');
Plugin::load('Ajax', ['bootstrap' => true]);

Configure::load('KingLoui/BaseKit.basekit');


// load app basekit cfg if file exists
if (file_exists(CONFIG . 'basekit/basekit.php')) {
    Configure::load('basekit/basekit');
}


// DB config
Configure::config('BaseKit', new DbConfig(TableRegistry::get('KingLoui/BaseKit.Configurations')));
Configure::load('BaseKit', 'BaseKit');


