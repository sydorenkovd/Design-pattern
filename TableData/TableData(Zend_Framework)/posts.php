<?php

use Zend\Db\TableGateway\TableGateway as TableGateway;
use Zend\Db\Adapter\Adapter;

class PostGateway extends TableGateway
{
    public function __construct()
    {
        $configArray = array(
            'driver' => 'Mysqli',
            'database' => 'development',
            'username' => 'developer',
            'password' => 'developer',
            'options' => array('buffer_results' => true)
        );

        $adapter = new Zend\Db\Adapter\Adapter($configArray);

        parent::__construct('posts', $adapter);
    }

    public function loadAll()
    {
        return $this->select();
    }

    public function loadById($id)
    {
        return $this->select(array('id' => $id));
    }
}