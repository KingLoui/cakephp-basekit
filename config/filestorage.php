<?php

use Cake\Event\EventManager;
use Burzum\FileStorage\Storage\StorageUtils;
use Burzum\FileStorage\Storage\StorageManager;
use Burzum\FileStorage\Event\ImageProcessingListener;
use Burzum\FileStorage\Event\LocalFileStorageListener;

$listener = new LocalFileStorageListener();
EventManager::instance()->on($listener);

// For automated image processing you'll have to attach this listener as well
$listener = new ImageProcessingListener();
EventManager::instance()->on($listener);