<?php

namespace KingLoui\BaseKit\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Event\EventManager;
use KingLoui\BaseKit\Renderer\YamlMenuParser;

class BaseKitComponent extends Component
{
    public $Controller;

    public function initialize(array $config) {
        $controller = $this->_registry->getController();
        $this->Controller = $controller;

        $this->Controller->loadComponent('RequestHandler');
        $this->Controller->loadComponent('Flash');
        $this->Controller->loadComponent('Gourmet/KnpMenu.Menu');


        EventManager::instance()->on('BaseKit.Menu.Sidebar', function ($event, $menu) {
            $yaml = new YamlMenuParser($menu, 'basekit/adminmenu.yaml');
        });
    }

    public function beforeRender(Event $event) {      
        // Only do setup for basekit if prefix is admin
        if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {

            // load helpers
            $this->Controller->viewBuilder()->helpers([
                'Url', 
                'Gourmet/KnpMenu.Menu'
            ]);

            // setup menu from config
            $menu = $this->Controller->Menu->get("menu_admin");
            $this->buildMenu($menu, Configure::read('BaseKit.Menu.AdminMenu'));
        }

    }

    public function isUrlAuthorized($url) {
        if(class_exists(\CakeDC\Users\Controller\Component\UsersAuthComponent::class)) {
            $event = new Event(\CakeDC\Users\Controller\Component\UsersAuthComponent::EVENT_IS_AUTHORIZED, $this, ['url' => $url]);
            $result = $this->Controller->eventManager()->dispatch($event);
            return $result->result;
        } else {
            return true;
        }
    }

    public function buildMenu($menu, $config) {
        foreach($config as $title => $cfg) {
            if(isset($cfg['uri'])) {
                // no submenu
                if($this->isUrlAuthorized($cfg['uri']))
                    $menu->addChild($title, $cfg);
            } else {
                // with submenu
                if($this->isUrlAuthorized($cfg[0]['uri'])){
                    $menu->addChild($title, $cfg[0]);
                    unset($cfg[0]);
                    $this->buildMenu($menu[$title], $cfg);
                }
            }
        }
    }
}