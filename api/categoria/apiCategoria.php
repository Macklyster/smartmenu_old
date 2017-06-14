<?php

namespace api\categoria;

/**
 * Description of apiCategoria
 *
 * @author Macklyster
 */

use libs\Model;
use object\categoria\Categoria;

class apiCategoria extends Model {
    public function get(Categoria $obj){
        $query = $this->First($this->Select("SELECT * FROM categoria WHERE id = '{$obj->id}'"));
        $this->setObject($obj, $query);
    }
    public function getlist(){
        return $this->Select("SELECT * FROM categoria");
    }
    public function save(Categoria $obj){
        if (empty($obj->categoria_id)){
            echo "<script>history.go(-2);</script>";
            return $this->Insert($obj,'categoria');
        } else {
            echo "<script>history.go(-2);</script>";
            return $this->Update($obj,array('id' => $obj->id),'categoria');
        }
    }
}
