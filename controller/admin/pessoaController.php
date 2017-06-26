<?php

namespace controller\admin;

/**
 * Description of pessoaController
 *
 * @author Macklyster
 */
use api\pessoa\apiPessoa;
use libs\Controller;
use object\pessoa\Pessoa;

class pessoaController extends Controller {

    public function index() {
        $api = new apiPessoa();

        $this->dados = array(
            'list' => $api->getlist()
        );
        $this->view();
    }

    public function formCadastro() {
        $Pessoa = new Pessoa();
        $Pessoa->id = $this->getParams(0);

        $api = new apiPessoa();
        $api->get($Pessoa);

        $this->dados = array(
            'dados' => $Pessoa
        );
        $this->view();
    }

    public function save() {
        $api = new apiPessoa();
        print_r($api->save(new Pessoa('POST')));
    }

}
