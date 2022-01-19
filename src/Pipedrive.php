<?php

namespace CodePhix\Pipedrive;

use CodePhix\Pipedrive\Connection;

class Pipedrive {

    private $connection;
    
    public function __construct($token, $status = false) {
        $this->connection = new Connection($token);
    }



}
