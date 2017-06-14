<?php

namespace object\itempedido;

/**
 * Description of Pedido
 *
 * @author Macklyster
 */

use libs\Object;

class ItemPedido extends Object {
    public $id;
    public $pedido_id;
    public $produto_id;
    public $quantidade;
    public $data;
    public $valorunitario;
}