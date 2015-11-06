<?php

    include '../application/bootstrap.php';

    $configSection = getenv('APW_CONFIG') ?
        getenv('APW_CONFIG') : 'general';
    //$configSection = 'general';
    $bootstrap = new Bootstrap($configSection);
    $bootstrap->RunApp();

?>