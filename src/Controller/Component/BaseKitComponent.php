<?php

namespace KingLoui\BaseKit\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;

//use Cake\Network\Exception\NotFoundException;
//use Knp\Menu\Util\MenuManipulator;

class BaseKitComponent extends Component
{
    public function initialize(array $config) {
    	$controller = $this->_registry->getController();

    	$controller->loadComponent('RequestHandler');
    	$controller->loadComponent('Flash');
    	$controller->loadComponent('Gourmet/KnpMenu.Menu');
    }

    public function beforeRender(Event $event) {      
    	$controller = $event->subject(); 

        // Only do setup for basekit if prefix is admin
        if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {

            // load helpers
            $controller->viewBuilder()->helpers([
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
            $controller->viewBuilder()->layout('KingLoui/BaseKit.default');

            // show/hide theme examples and settings based on config
            if(!Configure::read('BaseKit.NavSidebar.ShowThemeExamples'))
                Configure::delete('BaseKit.NavSidebar.MenuItems.Theme Examples');
            if(!Configure::read('BaseKit.NavSidebar.ShowThemeSettings'))
                Configure::delete('BaseKit.NavSidebar.MenuItems.Theme Settings');

            // setup menu from config
            // setup menu from config
            $menu = $this->Controller->Menu->get("menu_admin");
            $this->buildMenu($menu, Configure::read('BaseKit.NavSidebar.MenuItems'));

            // set view vars
            $controller->set('headerElement', Configure::read('BaseKit.NavSidebar.HeaderElement'));
            $controller->set('headerLogo', Configure::read('BaseKit.NavSidebar.HeaderLogo'));
            $controller->set('topLinksElement', Configure::read('BaseKit.NavTop.TopLinksElement'));
        }
    }

    public function buildMenu($menu, $config) {
        foreach($config as $title => $cfg) {
            if(isset($cfg['uri'])) {
                // no submenu
                $menu->addChild($title, $cfg);
            } else {
                // with submenu
                $menu->addChild($title, $cfg[0]);
                unset($cfg[0]);
                $this->buildMenu($menu[$title], $cfg);
            }
        }
    }
}