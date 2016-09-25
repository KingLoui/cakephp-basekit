<?php

namespace KingLoui\BaseKit\Controller\Traits;


use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;


trait BaseKitTrait
{

    public function initialize()
    {
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('CakeDC/Users.UsersAuth');
        $this->loadComponent('Gourmet/KnpMenu.Menu');

        parent::initialize();
    }
    public function beforeFilter(Event $event)
    {
        // disable authentication for all controllers/actions
        //$this->Auth->allow();

        parent::beforeFilter($event);
    }

    public function beforeRender(Event $event)
    {

        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        
        $this->viewBuilder()->helpers([
            'Url', 
            'Gourmet/KnpMenu.Menu',
            'Html' => ['className' => 'BootstrapUI.Html'],
            'Form' => ['className' => 'BootstrapUI.Form'],
            'Flash' => ['className' => 'BootstrapUI.Flash'],
            'Paginator' => ['className' => 'BootstrapUI.Paginator']
        ]);

        $this->viewBuilder()->layout('KingLoui/BaseKit.default');

        // if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {
        //     $this->viewBuilder()->layout('KingLoui/BaseKit.default');
        // } 

        // Render Menu Set in Config Files
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
        $menu = $this->Menu->get("menu_admin");
        $setMenu($menu, Configure::read('Adminmenu'));


         parent::beforeRender($event);       
    }

}