<?php

namespace api\produto;

/**
 * Description of apiProduto
 *
 * @author Macklyster
 */

use libs\Model;
use object\produto\Produto;

class apiProduto extends Model {
    public function get(Produto $obj){
        $query = $this->First($this->Select("SELECT * FROM produto WHERE id = '{$obj->id}'"));
        $this->setObject($obj, $query);
    }
    public function getlist(){
        return $this->Select("SELECT * FROM produto");
    }
    public function save(Produto $obj){
        if (empty($obj->id)){
            echo "<script>history.go(-2);</script>";
            return $this->Insert($obj,'produto');
        } else {
            echo "<script>history.go(-2);</script>";
            return $this->Update($obj,array('id' => $obj->id),'produto');
        }
    }
}
