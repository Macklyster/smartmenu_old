<?php

namespace api\sessao;

use libs\Model;
use object\sessao\Sessao;

class apiSessao extends Model {
    public function login(Sessao $obj){
        $user = trim($obj->login);
        $pass = trim($obj->senha);

        $sql = "SELECT * FROM funcionario WHERE login = '{$user}'";
        $query = $this->First($this->Select($sql));

        if (isset($query->senha)){
            if ($pass == $query->senha){
                $_SESSION['usuario'] = $query->senha;
                header('location:' . APP_ROOT . 'admin');
            } else {
                echo '<script> alert("usuário ou senha inválido"); </script>';
                header('location:' . APP_ROOT . 'admin/sessao');
            }
        } else {
            echo '<script> alert("usuário ou senha inválido"); </script>';
            header('location:' . APP_ROOT . 'admin/sessao');
        }
    }

    public function logout(){
        unset($_SESSION['usuario']);
        header('location:' . APP_ROOT . 'admin/sessao');
    }
}