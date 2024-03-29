<?php

namespace controller\admin;

use api\sessao\apiSessao;
use libs\Controller;
use object\sessao\Sessao;

class sessaoController extends Controller {
    public function index(){
        $this->layout = '_layout.login';
        $this->view();
    }
    public function logout(){
        $api = new apiSessao();
        $api->logout();
    }
    public function validar(){
        $api = new apiSessao();
        $api->login(new Sessao('POST'));
    }
}