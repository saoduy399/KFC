<?php

namespace APP\controller;

use APP\model;

class BaseController
{
    protected $connect;

    public function __construct(){
        $dbConnect = new model\DBConnect();
        $this->connect = $dbConnect->connect();
    }


}