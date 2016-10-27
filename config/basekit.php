<?php

$config = [
  'BaseKit' => [
      'Menu' => [
        'AdminMenu' => [
           'Dashboard' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","dashboard"], 'extras' => ['icon' => 'fa fa-tachometer']]
        ]
      ]
  ]
];
return $config;
