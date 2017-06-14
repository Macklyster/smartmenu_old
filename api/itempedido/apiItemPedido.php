<?php

namespace api\itempedido;

/**
 * Description of apiPedido
 *
 * @author Macklyster
 */

use libs\Model;
use object\itempedido\ItemPedido;

class apiItemPedido extends Model {
    public function get(ItemPedido $obj){
        $query = $this->First($this->Select("select
                                                    pd.id as produto_id
                                                    ,pd.produto
                                                    ,ip.quantidade
                                                    ,pd.valorvenda
                                                    ,ip.quantidade * pd.valorvenda as valortotal
                                            from
                                                itempedido ip 
                                                left join produto pd on ip.produto_id = pd.id
                                            where pedido_id = '{$obj->id}'"));
        $this->setObject($obj, $query);
    }
    public function getlist(){
        return $this->Select("select
                                pd.id as produto_id
                                ,pd.produto
                                ,ip.quantidade
                                ,pd.valorvenda
                                ,ip.quantidade * pd.valorvenda as valortotal
                            from
                                itempedido ip 
                                left join produto pd on ip.produto_id = id");
    }
    public function save(ItemPedido $obj){
        if (empty($obj->id)){
            return $this->Insert($obj,'itempedido');
        } else {
            return $this->Update($obj,array('id' => $obj->id),'itempedido');
        }
    }
}
