<?php

namespace Xpto\Module;

class DAO
{
    private $db;

    public function __construct($db)
    {
    	$this->db = $db;
    }

}