<?php

namespace api\item;

/**
 * Description of apiPedido
 *
 * @author Macklyster
 */

use libs\Model;
use object\item\Item;

class apiItem extends Model {
    public function get(Item $obj){
        $query = $this->First($this->Select("select
                                                    pd.id as produto_id
                                                    ,pd.produto
                                                    ,ip.quantidade
                                                    ,pd.valorvenda
                                                    ,ip.quantidade * pd.valorvenda as valortotal
                                            from
                                                itempedido ip 
                                                left join produto pd on ip.produto_id = id
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
    public function save(Item $obj){
        if (empty($obj->id)){
            return $this->Insert($obj,'itempedido');
        } else {
            return $this->Update($obj,array('id' => $obj->id),'itempedido');
        }
    }
}
