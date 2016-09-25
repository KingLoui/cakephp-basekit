<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
    'Adminmenu' => [
       'Dashboard' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","dashboard"], 'extras' => ['icon' => 'fa fa-th-large']],
       'Theme Settings' => [
       		['uri' => '#', 'extras' => ['icon' => 'fa fa-paint-brush']],
       		'Menu' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","menu"]],
       		'Skin' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","skin"]]
       ],
    ]
];
return $config;
