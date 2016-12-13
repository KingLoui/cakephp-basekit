<?php

namespace KingLoui\BaseKit\Controller\Admin;

use KingLoui\BaseKit\Controller\AppController;

class ConfigurationsController extends AppController
{
	public function initialize() {
		if (in_array($this->request->action, ['simple', 'edit'])) {
            $this->loadComponent('Ajax.Ajax');
		}
		parent::initialize();
	}

    public function index()
    {
        $configurations = $this->paginate($this->Configurations);

        $this->set(compact('configurations'));
        $this->set('_serialize', ['configurations']);
    }

    public function edit($id = null)
    {
        $configuration = $this->Configurations->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $configuration = $this->Configurations->patchEntity($configuration, $this->request->data);
            if ($this->Configurations->save($configuration)) {
                $this->Flash->success(__('The configuration has been saved.'));
                
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The configuration could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('configuration'));
        $this->set('_serialize', ['configuration']);
    }
}