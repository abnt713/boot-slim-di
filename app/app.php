<?php

use DI\Bridge\Slim\App;
use DI\ContainerBuilder;

class BootApp extends App
{

    private $definitionsFilePath;

    public function __construct($definitionsFilePath)
    {
        $this->definitionsFilePath = $definitionsFilePath;
        parent::__construct();
    }

    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions($this->definitionsFilePath);
    }
}
