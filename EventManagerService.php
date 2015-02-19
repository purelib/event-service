<?php

namespace PureLib\Service;

use PureLib\Base\ServiceFactoryInterface;
use Zend\EventManager\EventManager;
use Zend\ServiceManager\ServiceLocatorInterface;

class EventManagerService implements ServiceFactoryInterface {
    public function createService (ServiceLocatorInterface $serviceLocator) {
        return new EventManager();
    }
}