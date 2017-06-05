<?php

namespace controller\admin;

use vendor\Seguranca;
use libs\Controller;

class homeController extends Controller {
    public function __construct(){
        parent::__construct();

        new Seguranca();
    }
    public function index(){
        $this->view();
    }
}