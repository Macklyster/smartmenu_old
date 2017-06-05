<?php

namespace api\cargo;

/**
 * Description of apiCargo
 *
 * @author Macklyster
 */
use libs\Model;
use object\cargo\Cargo;

class apiCargo extends Model {

    public function get(Cargo $obj) {
        $query = $this->First($this->Select("SELECT * FROM cargo WHERE id = '{$obj->id}'"));
        $this->setObject($obj, $query);
    }

    public function getlist() {
        return $this->Select("SELECT * FROM cargo");
    }

    public function save(Cargo $obj) {
        if (empty($obj->id)) {
            return $this->Insert($obj, 'cargo');
        } else {
            return $this->Update($obj, array('id' => $obj->id), 'cargo');
        }
        echo "<div class='alert alert-success'>
				Registro Salvo/Atualizado com Sucesso
				</div>";
    }

    public function delet(Cargo $obj) {
        if (!empty($obj->id)) {
            return $this->Delete($obj, array('id' => $obj->id), 'cargo');
        } else {
            echo 'Erro ao excluir, merda tente novamente!';
        }
    }

}
