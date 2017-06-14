<?php

namespace api\pedido;

/**
 * Description of apiPedido
 *
 * @author Macklyster
 */
use libs\Model;
use object\pedido\Pedido;

class apiPedido extends Model {

    public function get(Pedido $obj) {
        $query = $this->First($this->Select("select * from pedido where id = '{$obj->id}'"));
        $this->setObject($obj, $query);
    }

    public function getlist() {
        return $this->Select(
            "select
                p.id
                ,pc.nome as nomecliente
                ,pf.nome as nomefuncionario
                ,p.mesa_id as mesa
                ,p.data
                ,p.situacao
            from
                pedido p
                left join cliente c 	on c.id = p.cliente_id
                left join pessoa pc 	on pc.id = c.id
                left join funcionario f on f.id = p.funcionario_id
                left join pessoa pf 	on pf.id = f.id
        ");
    }

    public function save(Pedido $obj) {
        if (empty($obj->id)) {
            return $this->Insert($obj, 'pedido');
        } else {
            return $this->Update($obj, array('id' => $obj->id), 'pedido');
        }
    }

}
