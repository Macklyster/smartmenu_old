<?php

namespace controller\admin;

/**
 * Description of categoriaController
 *
 * @author Macklyster
 */

use api\categoria\apiCategoria;
use libs\Controller;
use object\categoria\Categoria;

class categoriaController extends Controller {
    public function index(){
        $api = new apiCategoria();

        $this->dados = array(
            'list' => $api->getlist()
        );
        $this->view();
    }
    public function formCadastro(){
        $Categoria = new Categoria();
        $Categoria->id = $this->getParams(0);

        $api = new apiCategoria();
        $api->get($Categoria);

        $this->dados = array(
            'dados' => $Categoria
        );
        $this->view();
    }
    public function save(){
        $api = new apiCategoria();
        print_r($api->save(new Categoria('POST')));
    }
    
    public function formDelete() {
        $Categoria = new Categoria();
        $Categoria->id = $this->getParams(0);

        $api = new apiCategoria();
        $api->get($Categoria);

        $this->dados = array(
            'dados' => $Categoria
        );
        $this->view();
    }
    
    public function delet() {
        $api = new apiCategoria();
        $objCategoria = new Categoria('POST');
        $api->Delete(array('id' => $objCategoria->id),'categoria');
    }
}
