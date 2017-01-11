<?php

namespace KingLoui\BaseKit\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Event\EventManager;
use CakeDC\Users\Controller\Component\UsersAuthComponent;
use Gourmet\KnpMenu\Controller\Component\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    public $Controller;

    public function initialize(array $config) {
        parent::initialize($config);
        $controller = $this->_registry->getController();
        $this->Controller = $controller;
    }

    public function beforeRender(Event $event) {   
        parent::beforeRender($event);

        // Only do setup for basekit if prefix is admin
        if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {

            // load helpers
            $this->Controller->viewBuilder()->helpers([
                'Url', 
                'Gourmet/KnpMenu.Menu'
            ]);

            // setup menu from config
            $menu = $this->get('menu_admin');
            $this->buildMenu($menu, Configure::read('BaseKit.Menu.AdminMenu'));
        }

    }

    public function isUrlAuthorized($url) {
        if(class_exists(UsersAuthComponent::class)) {
            $event = new Event(UsersAuthComponent::EVENT_IS_AUTHORIZED, $this, ['url' => $url]);
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