<?php

namespace object\usuario;

/**
 * Description of Usuario
 *
 * @author Macklyster
 */

use libs\Object;

class Usuario extends Object {
    public $id;
    public $pessoa_id;
    public $cargo_id;
    public $login;
    public $senha;
    public $dataadmissao;
    public $datademissao;
    public $situacao;
}