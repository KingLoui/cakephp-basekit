<?php

use Cake\Core\Plugin;
use Cake\Core\Configure;

Plugin::load('Burzum/FileStorage');
include('filestorage.php');
Plugin::load('Burzum/Imagine');
Plugin::load('Gourmet/KnpMenu');
Plugin::load('BootstrapUI');

Configure::load('KingLoui/BaseKit.basekit');
