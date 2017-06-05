<?php

namespace object\pessoa;

/**
 * Description of Pessoa
 *
 * @author Macklyster
 */

use libs\Object;

class Pessoa extends Object {
    public $id;
    public $cpf;
    public $nome;
    public $sexo;
    public $cidade_id;
    public $endereco;
    public $complemento;
    public $bairro;
    public $cep;
    public $telefone;
    public $email;
    public $datainclusao;
}