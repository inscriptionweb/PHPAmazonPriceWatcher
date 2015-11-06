<?php

    include '../application/bootstrap.php';

    $configSection = getenv('APW_CONFIG') ?
        getenv('APW_CONFIG') : 'general';
    $bootstrap = new Bootstrap($configSection);
    $bootstrap->RunApp();

?>