<?php

namespace controller\site;

/**
 * Description of homeController
 *
 * @author Macklyster
 */

use libs\Controller;

class homeController extends Controller {
    public function __construct(){
        parent::__construct();

        $this->layout = '_layout';
    }
    public function index(){
        $this->title = "Meu novo titulo";
        $this->view();
    }
}