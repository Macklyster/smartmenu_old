<?php

namespace api\usuario;

/**
 * Description of apiCargo
 *
 * @author Macklyster
 */
use libs\Model;
use object\usuario\Usuario;

class apiUsuario extends Model {

    public function get(Usuario $obj) {
        $query = $this->First($this->Select("SELECT
                                                * 
                                            FROM 
                                                funcionario 
                                            WHERE id = '{$obj->id}'"));
        $this->setObject($obj, $query);
    }

    public function getlist() {
        return $this->Select("SELECT 
                                f.*
                                ,p.nome as nome
                                ,c.cargo as cargo
                            FROM 
                                funcionario f
                                left join pessoa p on f.pessoa_id = p.id
                                left join cargo c on f.cargo_id = c.id");
    }

    public function save(Usuario $obj) {
        if (empty($obj->id)) {
            return $this->Insert($obj, 'funcionario');
        } else {
            return $this->Update($obj, array('id' => $obj->id), 'funcionario');
        }
    }

}
