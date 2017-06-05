<?php

namespace object\pedido;

/**
 * Description of Pedido
 *
 * @author Macklyster
 */

use libs\Object;

class Pedido extends Object {
    public $id;
    public $cliente_id;
    public $funcionario_id;
    public $mesa_id;
    public $data;
    public $status;
    public $valortotal;
    public $quantidade;
    public $valorunitario;
    public $produto_id;
}