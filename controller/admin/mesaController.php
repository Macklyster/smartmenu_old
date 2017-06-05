<?php

namespace controller\admin;

/**
 * Description of mesaController
 *
 * @author Macklyster
 */

use api\mesa\apiMesa;
use libs\Controller;
use object\mesa\Mesa;

use api\produto\apiProduto;
use object\produto\Produto;
use api\pedido\apiPedido;
use object\pedido\Pedido;


class mesaController extends Controller {
    public function index(){
        $Mesa = new Mesa();
        $Mesa->id = $this->getParams(0);
        
        $api = new apiMesa();
        $api->get($Mesa);
        
        $this->dados = array(
            'dados' => $Mesa,
            'listitem' => $api->getlist()
        );
        $this->view();
    }
    
    public function formCadastro(){
        $Mesa = new Mesa();
        $Mesa->id = $this->getParams(0);

        $api = new apiMesa();
        $api->get($Mesa);

        $this->dados = array(
            'dados' => $Mesa
        );
        $this->view();
    }
    
    public function formItemPedidoMesa(){
        $Pedido = new Pedido();
        $Pedido->id = $this->getParams(0);

        $api = new apiPedido();
        $api->get($Pedido);

        $this->dados = array(
            'dados' => $Pedido
        );
        $this->view();
    }
    
    public function save(){
        $api = new apiMesa();
        print_r($api->save(new Mesa('POST')));
    }
}
