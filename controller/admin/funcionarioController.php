<?php

namespace controller\admin;

/**
 * Description of funcionarioController
 *
 * @author Macklyster
 */

use api\funcionario\apiFuncionario;
use libs\Controller;
use object\funcionario\Funcionario;
use api\cargo\apiCargo;
use object\cargo\Cargo;

class funcionarioController extends Controller {
    public function index(){
        $api = new apiFuncionario();

        $this->dados = array(
            'list' => $api->getlist()
        );
        
        $this->view();
    }
    public function formCadastro(){
        $Funcionario = new Funcionario();
        $Funcionario->id = $this->getParams(0);

        $api = new apiFuncionario();
        $api->get($Funcionario);
                
        $Cargo = new Cargo();
        $Cargo->id = $this->getParams(0);
        $apiCargo = new apiCargo();
        
        $this->dados = array(
            'dados' => $Funcionario,
            'list' => $api->getlist(), $apiCargo->getlist()
        );
        $this->view();
    }
    public function save(){
        $api = new apiFuncionario();
        print_r($api->save(new Funcionario('POST')));
    }
}