<?php

namespace object\produto;

/**
 * Description of Produto
 *
 * @author Macklyster
 */

use libs\Object;

class Produto extends Object {
    public $id;
    public $categoria_id;
    public $produto;
    public $quantidade;
    public $valorcusto;
    public $valorvenda;
}