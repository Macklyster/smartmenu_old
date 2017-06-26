<?php

namespace api\funcionario;

/**
 * Description of apiFuncionario
 *
 * @author Macklyster
 */
use libs\Model;
use object\funcionario\Funcionario;

class apiFuncionario extends Model {

    public function get(Funcionario $obj) {
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

    public function save(Funcionario $obj) {
        if (empty($obj->id)) {
            //echo "<script>history.go(-2);</script>";
            return $this->Insert($obj, 'funcionario');
        } else {
            //echo "<script>history.go(-2);</script>";
            return $this->Update($obj, array('id' => $obj->id), 'funcionario');
        }
    }

}
