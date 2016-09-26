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

    public function beforeRender(Event $event)
    {      
    	$controller = $event->subject(); 


        // load helpers
        $controller->viewBuilder()->helpers([
            'Url', 
            'Gourmet/KnpMenu.Menu',
            'Html' => ['className' => 'BootstrapUI.Html'],
            'Form' => ['className' => 'BootstrapUI.Form'],
            'Flash' => ['className' => 'BootstrapUI.Flash'],
            'Paginator' => ['className' => 'BootstrapUI.Paginator']
        ]);

        // set app layout to basekit layouts
        $controller->viewBuilder()->layout('KingLoui/BaseKit.default');

        // setup menu from config
        $setMenu = function($menu, $config) use ( &$setMenu ) {
            foreach($config as $title => $cfg) {
                if(isset($cfg['uri'])) {
                    // no submenu
                    $menu->addChild($title, $cfg);
                } else {
                    // with submenu
                    $menu->addChild($title, $cfg[0]);
                    unset($cfg[0]);
                    $setMenu($menu[$title], $cfg);
                }
            }
        };
        $menu = $controller->Menu->get("menu_admin");
        $setMenu($menu, Configure::read('BaseKit.AdminMenu.MenuItems'));
        $controller->set('headerElement', Configure::read('BaseKit.AdminMenu.HeaderElement'));
        //$manipulator = new MenuManipulator();
        //debug($manipulator->getBreadcrumbsArray($menu));    
    }
}