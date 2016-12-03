<?php

/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {

    public $config;

    public function _initConfig() {
        $this->config=Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $this->config);
         Yaf_Dispatcher::getInstance()->autoRender(FALSE);
    }

    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {
        $dispatcher->setDefaultModule("Index")->setDefaultController("Index")->setDefaultAction("index");
    }

    public function _initDefaultDbAdapter() {
        // $Db = new Db_Mysql($this->config->database->config->toArray());
        // Yaf_Registry::set('Db', $Db);
    }

}

