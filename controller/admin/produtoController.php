<?php

namespace controller\admin;

/**
 * Description of produtoController
 *
 * @author Macklyster
 */

use api\produto\apiProduto;
use libs\Controller;
use object\produto\Produto;
use api\categoria\apiCategoria;
use object\categoria\Categoria;

class produtoController extends Controller {
    public function index(){
        $api = new apiProduto();

        $this->dados = array(
            'list' => $api->getlist()
        );
        $this->view();
    }
    public function formCadastro(){
        $Produto = new Produto();
        $Produto->id = $this->getParams(0);

        $api = new apiProduto();
        $api->get($Produto);
        
        $Categoria = new Categoria();
        $Categoria->id = $this->getParams(0);
        $apiCategoria = new apiCategoria();

        $this->dados = array(
            'dados' => $Produto,
            'list' => $apiCategoria->getlist()
        );
        $this->view();
    }
    public function save(){
        $api = new apiProduto();
        print_r($api->save(new Produto('POST')));
    }
}
