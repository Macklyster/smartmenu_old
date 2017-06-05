<?php

namespace libs;

/**
 * Description of Object
 *
 * @author Macklyster
 */
class Object {
    public function __construct($method = null, $all = true){
        if ($method == 'POST'){
            foreach ($_POST as $ind => $val){
                $this->$ind = $val;
            }
        }

        if ($method == 'GET'){
            foreach ($_GET as $ind => $val){
                $this->$ind = $val;
            }
        }
        
        if (isset($_FILES)){
            foreach ($_FILES as $ind => $val) {
                if ($all || isset($this->$ind)){
                    $this->$ind = $val;
                }
            }
        }
    }
}