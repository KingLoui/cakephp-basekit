<?php

namespace KingLoui\BaseKit\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;

class BaseKitComponent extends Component
{
    public $Controller;

    public function initialize(array $config) {
        $controller = $this->_registry->getController();
        $this->Controller = $controller;

        $this->Controller->loadComponent('RequestHandler');
        $this->Controller->loadComponent('Flash');
        $this->Controller->loadComponent('Gourmet/KnpMenu.Menu');
    }

    public function beforeRender(Event $event) {      
        // Only do setup for basekit if prefix is admin
        if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {

            // load helpers
            $this->Controller->viewBuilder()->helpers([
                'Url', 
                'Gourmet/KnpMenu.Menu',
                'Html' => ['className' => 'BootstrapUI.Html'],
                'Form' => ['className' => 'BootstrapUI.Form'],
                'Flash' => ['className' => 'BootstrapUI.Flash'],
                'Paginator' => [
                    'className' => 'BootstrapUI.Paginator',
                    'labels' => [
                        'prev' => '<i class="fa fa-chevron-left"></i>',
                        'next' => '<i class="fa fa-chevron-right"></i>',
                    ]
                ]
            ]);
            
            // set app layout to basekit layouts
            $this->Controller->viewBuilder()->layout('KingLoui/BaseKit.default');

            // show/hide theme examples and settings based on config
            if(!Configure::read('BaseKit.NavSidebar.ShowThemeExamples'))
                Configure::delete('BaseKit.NavSidebar.MenuItems.Theme Examples');
            if(!Configure::read('BaseKit.NavSidebar.ShowThemeSettings'))
                Configure::delete('BaseKit.NavSidebar.MenuItems.Theme Settings');

            // setup menu from config
            $menu = $this->Controller->Menu->get("menu_admin");
            $this->buildMenu($menu, Configure::read('BaseKit.NavSidebar.MenuItems'));
            //debug($this->urlIsAuthorized("/admin"));
            //debug($this->urlIsAuthorized("/admin/users/add"));

            // set view vars
            $this->Controller->set('headerElement', Configure::read('BaseKit.NavSidebar.HeaderElement'));
            $this->Controller->set('headerLogo', Configure::read('BaseKit.NavSidebar.HeaderLogo'));
            $this->Controller->set('topLinksElement', Configure::read('BaseKit.NavTop.TopLinksElement'));
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