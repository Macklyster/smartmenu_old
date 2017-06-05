<?php

namespace api\pessoa;

/**
 * Description of apiPessoa
 *
 * @author Macklyster
 */

use libs\Model;
use object\pessoa\Pessoa;

class apiPessoa extends Model {
    public function get(Pessoa $obj){
        $query = $this->First($this->Select("SELECT * FROM pessoa WHERE id = '{$obj->id}'"));
        $this->setObject($obj, $query);
    }
    public function getlist(){
        return $this->Select("SELECT * FROM pessoa");
    }
    public function save(Pessoa $obj){
        if (empty($obj->id)){
            return $this->Insert($obj,'pessoa');
        } else {
            return $this->Update($obj,array('id' => $obj->id),'pessoa');
        }
    }
}
