<?php

$config = [
  'BaseKit' => [
      // 'NavTop' => [
      //   'TopLinksElement' => ''
      // ],
      'Menu' => [
        // 'HeaderElement' => '',
        // 'HeaderLogo' => 'BK',
        'AdminMenu' => [
           'Dashboard' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","dashboard"], 'extras' => ['icon' => 'fa fa-tachometer']]
        ]
      ]
  ]
];
return $config;
