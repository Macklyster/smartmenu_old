<?php

namespace object\funcionario;

/**
 * Description of Funcionario
 *
 * @author Macklyster
 */

use libs\Object;

class Funcionario extends Object {
    public $id;
    public $pessoa_id;
    public $cargo_id;
    public $login;
    public $senha;
    public $dataadmissao;
    public $datademissao;
    public $situacao;
}