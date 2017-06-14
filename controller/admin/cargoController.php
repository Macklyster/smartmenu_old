<?php

namespace controller\admin;

/**
 * Description of cargoController
 *
 * @author Macklyster
 */
use api\cargo\apiCargo;
use libs\Controller;
use object\cargo\Cargo;

class cargoController extends Controller {

    public function index() {
        $api = new apiCargo();

        $this->dados = array(
            'list' => $api->getlist()
        );
        $this->view();
    }

    public function formCadastro() {
        $Cargo = new Cargo();
        $Cargo->id = $this->getParams(0);

        $api = new apiCargo();
        $api->get($Cargo);

        $this->dados = array(
            'dados' => $Cargo
        );
        $this->view();
    }

    public function save() {
        $api = new apiCargo();
        $api->save(new Cargo('POST'));
    }

    public function formDelete() {
        $Cargo = new Cargo();
        $Cargo->id = $this->getParams(0);

        $api = new apiCargo();
        $api->get($Cargo);

        $this->dados = array(
            'dados' => $Cargo
        );
        $this->view();
    }

    public function delet() {
        $api = new apiCargo();
        $objCargo = new Cargo('POST');
        $api->Delete(array('id' => $objCargo->id), 'cargo');
    }

}
