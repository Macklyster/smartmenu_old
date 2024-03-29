<?php

namespace controller\admin;

/**
 * Description of pedidoController
 *
 * @author Macklyster
 */

use api\pedido\apiPedido;
use libs\Controller;
use object\pedido\Pedido;

use api\itempedido\apiItemPedido;
use object\itempedido\ItemPedido;

class pedidoController extends Controller {
    public function index(){
        $api = new apiPedido();

        $this->dados = array(
            'list' => $api->getlist()
        );
        $this->view();
    }
    public function formCadastro(){
        $Pedido = new Pedido();
        $Pedido->id = $this->getParams(0);

        $api = new apiPedido();
        $api->get($Pedido);
        
        $ItemPedido = new ItemPedido();
        $ItemPedido->id = $this->getParams(0);
        
        $apiItemPedido = new apiItemPedido();
        $apiItemPedido->get($ItemPedido);
        
        $this->dados = array(
            'dados' => $Pedido, $ItemPedido
        );
        $this->view();
    }
    public function save(){
        $api = new apiPedido();
        print_r($api->save(new Pedido('POST')));
    }
}
