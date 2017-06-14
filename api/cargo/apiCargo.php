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
            echo "<script>history.go(-2);</script>";
            return $this->Insert($obj, 'cargo');
        } else {
            echo "<script>history.go(-2);</script>";
            return $this->Update($obj, array('id' => $obj->id), 'cargo');
        }
    }

    public function delet(Cargo $obj) {
        if (!empty($obj->id)) {
            echo "<script>history.go(-2);</script>";
            return $this->Delete($obj, array('id' => $obj->id), 'cargo');
        } else {
            echo 'Erro ao excluir, tente novamente!';
        }
    }

}
