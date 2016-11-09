<?php

$config = [
  'BaseKit' => [
      'Modules' => [
        'Users' => true,
        'Themes' => true,
        'Construct' => true,
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
