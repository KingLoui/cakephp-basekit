<?php

use Cake\Core\Plugin;
use Cake\Core\Configure;
use Gourmet\Aroma\Core\Configure\Engine\DbConfig;

Plugin::load('Gourmet/KnpMenu');
Plugin::load('Gourmet/Aroma');

Configure::load('KingLoui/BaseKit.basekit');
Configure::config('db', new DbConfig());