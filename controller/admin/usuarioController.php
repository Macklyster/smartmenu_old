<?php

namespace controller\admin;

/**
 * Description of cargoController
 *
 * @author Macklyster
 */

use api\usuario\apiUsuario;
use libs\Controller;
use object\usuario\Usuario;
use api\cargo\apiCargo;
use object\cargo\Cargo;

class usuarioController extends Controller {
    public function index(){
        $api = new apiUsuario();

        $this->dados = array(
            'list' => $api->getlist()
        );
        
        $this->view();
    }
    public function formCadastro(){
        $Usuario = new Usuario();
        $Usuario->id = $this->getParams(0);

        $api = new apiUsuario();
        $api->get($Usuario);
                
        $Cargo = new Cargo();
        $Cargo->id = $this->getParams(0);
        $apiCargo = new apiCargo();
        
        $this->dados = array(
            'dados' => $Usuario,
            'list' => $apiCargo->getlist()
        );
        $this->view();
    }
    public function save(){
        $api = new apiUsuario();
        print_r($api->save(new Usuario('POST')));
    }
}