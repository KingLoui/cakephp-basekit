<?php

$config = [
  'BaseKit' => [
      'Themes' => [
        'ThemeAdmin' => false,
        'ThemeDefault' => false,
        'LayoutAdmin' => 'default',
        'LayoutDefault' => 'default'
      ],
      'Menu' => [
        'AdminMenu' => [
           'Dashboard' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","dashboard"], 'extras' => ['icon' => 'fa fa-tachometer']],
           'Settings' => [['uri' => '#', 'extras' => ['icon' => 'fa fa-cog']],
              'All' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Configurations","action" => "index"]],
              'General' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","generalsettings"]]
           ],
        ]
      ]
  ]
];
return $config;
