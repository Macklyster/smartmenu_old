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
        if (empty($obj->id)){
            return $this->Insert($obj,'categoria');
        } else {
            return $this->Update($obj,array('id' => $obj->id),'categoria');
        }
    }
}
