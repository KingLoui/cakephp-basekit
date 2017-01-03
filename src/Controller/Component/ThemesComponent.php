<?php

namespace KingLoui\BaseKit\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;

class ThemesComponent extends Component
{
    public $Controller;

    public function initialize(array $config) {
        $controller = $this->_registry->getController();
        $this->Controller = $controller;
    }

    public function startup(Event $event) {
        if($this->Controller->viewBuilder()->className() != 'Ajax.Ajax') {

            $theme = false;
            $layout = false;

        	if (isset($this->request->params['prefix']) && array_key_exists($this->request->params['prefix'], Configure::read('BaseKit.Themes.ThemePrefix'))) {
        		//apply prefix theme config
                $theme = Configure::read('BaseKit.Themes.ThemePrefix.'.$this->request->params['prefix']);
                $layout = Configure::read('BaseKit.Themes.LayoutPrefix.'.$this->request->params['prefix']);
        	} else {
        		// apply default theme config
                $theme = Configure::read('BaseKit.Themes.ThemeDefault');
                $layout = Configure::read('BaseKit.#Themes.LayoutDefault');
        	
        	}

            if($theme !== false) {
                $this->Controller->viewBuilder()->className($theme . '.Theme');
                $this->Controller->viewBuilder()->theme($theme);
            }
            if($layout !== false) {
                $this->Controller->viewBuilder()->layout($layout);
            }
        }
    }
}