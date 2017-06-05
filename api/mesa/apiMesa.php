<?php

namespace api\mesa;

/**
 * Description of apiMesa
 *
 * @author Macklyster
 */

use libs\Model;
use object\mesa\Mesa;

class apiMesa extends Model {
    public function get(Mesa $obj){
        $query = $this->First($this->Select("SELECT * FROM mesa WHERE id = '{$obj->id}'"));
        $this->setObject($obj, $query);
    }
    public function getlist(){
        return $this->Select("SELECT * FROM mesa m where m.datainclusao = current_date");
    }
    public function save(Mesa $obj){
        if (empty($obj->id)){
            return $this->Insert($obj,'mesa');
        } else {
            return $this->Update($obj,array('id' => $obj->id),'mesa');
        }
    }
}
