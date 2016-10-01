<?php

$config = [
  'BaseKit' => [
      'NavTop' => [
        'TopLinksElement' => ''
      ],
      'NavSidebar' => [
        'HeaderElement' => '',
        'HeaderLogo' => 'BK',
        'ShowThemeExamples' => true,
        'ShowThemeSettings' => true,
        'MenuItems' => [
           'Dashboard' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","dashboard"], 'extras' => ['icon' => 'fa fa-tachometer']],
           'Theme Settings' => [['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themesettings","menu"], 'extras' => ['icon' => 'fa fa-paint-brush']],
              'Menu' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themesettings","menu"]],
              'Skin' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themesettings","skin"]]
           ],
           'Theme Examples' => [['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themeexamples","widgets"], 'extras' => ['icon' => 'fa fa-asterisk']],
              'Widgets' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themeexamples","widgets"]],
              'Other Pages' => [['uri' => '#'],
                'Search results' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themeexamples","otherpages","searchresults"]],
                'Lockscreen' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themeexamples","otherpages","lockscreen"]]
              ],
              'Forms' => [['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themeexamples","forms","basic"]],
                'Basic' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themeexamples","forms","basic"]],
                'Advanced' => ['uri' => ['plugin' => 'KingLoui/BaseKit', "controller" => "Pages","action" => "display","themeexamples","forms","advanced"]]
              ],
           ]
        ]
      ]
  ]
];
return $config;
