<?php

namespace controller\admin;

/**
 * Description of pedidoController
 *
 * @author Macklyster
 */

use api\itempedido\apiItemPedido;
use libs\Controller;
use object\itempedido\ItemPedido;

class itemPedidoController extends Controller {
    public function index(){
        $api = new apiItemPedido();

        $this->dados = array(
            'list' => $api->getlist()
        );
        $this->view();
    }
    public function formCadastro(){
        $ItemPedido = new ItemPedido();
        $ItemPedido->id = $this->getParams(0);

        $api = new apiItemPedido();
        $api->get($ItemPedido);

        $this->dados = array(
            'dados' => $ItemPedido
        );
        $this->view();
    }
    public function save(){
        $api = new apiItemPedido();
        print_r($api->save(new ItemPedido('POST')));
    }
}
