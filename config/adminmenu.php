<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
    'Adminmenu' => [
       'Dashboard' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","dashboard"], 'extras' => ['icon' => 'fa fa-th-large']],
       'Theme Settings' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themesettings"], 'extras' => ['icon' => 'fa fa-th-large']]
    ]
];
return $config;
