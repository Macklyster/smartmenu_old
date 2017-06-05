<?php

namespace controller\admin;

/**
 * Description of pedidoController
 *
 * @author Macklyster
 */

use api\item\apiItem;
use libs\Controller;
use object\item\Item;

class itemController extends Controller {
    public function index(){
        $api = new apiItem();

        $this->dados = array(
            'list' => $api->getlist()
        );
        $this->view();
    }
    public function formCadastro(){
        $Item = new Item();
        $Item->id = $this->getParams(0);

        $api = new apiItem();
        $api->get($Item);

        $this->dados = array(
            'dados' => $Item
        );
        $this->view();
    }
    public function save(){
        $api = new apiItem();
        print_r($api->save(new Item('POST')));
    }
}
