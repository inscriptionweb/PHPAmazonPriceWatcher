<?php

class Bootstrap
{
    public function __construct($configSection)
    {
        $rootDir = dirname(dirname(__FILE__));
        define('ROOT_DIR', $rootDir);
        set_include_path(get_include_path()
            . PATH_SEPARATOR . ROOT_DIR . '/library/'
            . PATH_SEPARATOR . ROOT_DIR .
            '/application/models'
        );

        include 'Zend/Loader.php';
        Zend_Loader::registerAutoload();

        // Load configuration
        Zend_Registry::set('configSection'. $configSection);
        $config = new Zend_Config_ini(ROOT_DIR . '/application/config.ini', $configSection);
        Zend_Registry::set('config', $config);

        date_default_timezone_set(
            $config->date_default_timezone);


        // configure database and store to the registry
        $db = Zend_Db::factory($config->db);
        Zend_Db_Table_Abstract::setDefaultAdapter($db);
        Zend_Registry::set('db', $db);
    }

    public function configureFrontController()
    {
        $frontController = Zend_Controller_Front::getInstance();
            $frontController->setControllerDirectory(ROOT_DIR .
                '/application/controllers');
    }

    public function runApp()
    {
        $this->configureFrontController();

        // run!
        $frontController = Zend_Controller_Front::getInstance();
        $frontController->dispatch();
    }

}