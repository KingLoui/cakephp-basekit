<?php

use Cake\Core\Plugin;
use Cake\Core\Configure;

// move to construct plugin
Plugin::load('Burzum/FileStorage');
include('filestorage.php');
Plugin::load('Burzum/Imagine');


Plugin::load('Gourmet/KnpMenu');
Configure::load('KingLoui/BaseKit.basekit');