<?php

namespace Xpto\Module;

class Manager
{
	private $DAO;

    public function __construct($db)
    {
        $this->DAO = new DAO($db);
    }
}