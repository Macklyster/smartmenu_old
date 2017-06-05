<?php

namespace object\pedido;

/**
 * Description of Pedido
 *
 * @author Macklyster
 */

use libs\Object;

class Pedido extends Object {
    public $pedido_id;
    public $produto_id;
    public $quantidade;
    public $data;
    public $valorunitario;
}