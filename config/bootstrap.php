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


// Load BaseKitPlugins

if(Configure::check('BaseKit.Modules')) {
	if(Configure::read('BaseKit.Modules.Users'))
		Plugin::load('KingLoui/BaseKitUsers', ['bootstrap' => true, 'routes' => true]);
	if(Configure::read('BaseKit.Modules.Themes'))
		Plugin::load('KingLoui/BaseKitThemes', ['bootstrap' => true, 'routes' => false]);
	if(Configure::read('BaseKit.Modules.Construct'))
		Plugin::load('KingLoui/BaseKitConstruct', ['bootstrap' => true, 'routes' => true]);
}