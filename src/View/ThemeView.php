<?php

namespace KingLoui\BaseKit\View;

use App\View\AppView;
use Cake\Core\App;
use Cake\Utility\Inflector;

class ThemeView extends AppView
{
	protected function _paths($plugin = null, $cached = true) {
		$paths = parent::_paths($plugin, $cached);
		$childThemePath = App::path('Template', 'ChildTheme');
		$paths = array_merge($childThemePath, $paths);

		return $this->_paths = $paths;
	}
}