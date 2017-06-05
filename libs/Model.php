<?php

namespace libs;

/**
 * Description of Model
 *
 * @author Macklyster
 */
class Model extends Config {

    protected $con;

    public function __construct() {
        try {
            $this->con = new \PDO("mysql:host=" . self::srvMyhost . ";dbname=" . self::srvMydbname, self::srvMyuser, self::srvMypass);
            $this->con->exec("set names " . self::charset);
            $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function Select($sql) {
        try {
            $state = $this->con->prepare($sql);
            $state->execute();
        } catch (\PDOException $ex) {
            die($ex->getMessage() . " " . $sql);
        }
        $array = array();
        while ($row = $state->fetchObject()) {
            $array[] = $row;
        }
        return $array;
    }

    public function Insert($obj, $table) {
        try {

            $sql = "INSERT INTO {$table} (" . implode(",", array_keys((array) $obj)) . ") VALUES ('" . implode("','", array_values((array) $obj)) . "')";
            $state = $this->con->prepare($sql);
            $state->execute(array('widgets'));
        } catch (\PDOException $ex) {
            die($ex->getMessage() . " " . $sql);
        }
        //return array('sucess'=>true, 'feedback'=>'<div class=\'alert alert-success\'>Registro foi saldo com Sucesso!</div>', 'codigo'=>$this->Last($table));
        echo "<script>alert('Registro Salvo com sucesso!');history.back();</script>";
    }

    public function Update($obj, $condition, $table) {
        try {
            foreach ($obj as $ind => $val) {
                $dados[] = "`{$ind}` = " . (is_null($val) ? " NULL " : "'{$val}'" );
            }
            foreach ($condition as $ind => $val) {
                $where[] = "`{$ind}` " . (is_null($val) ? " IS NULL " : " = '{$val}'" );
            }

            $sql = "UPDATE {$table} SET " . implode(',', $dados) . " WHERE " . implode(' AND ', $where);

            $state = $this->con->prepare($sql);
            $state->execute(array('widgets'));

        } catch (\PDOException $ex) {
            die($ex->getMessage() . " " . $sql);
        }
    }

    public function Delete($condition, $table) {
        try {
            foreach ($condition as $ind => $val) {
                $where[] = "`{$ind}` " . (is_null($val) ? " IS NULL " : " = '{$val}'" );
            }
            $sql = "DELETE FROM {$table} WHERE " . implode(' AND ', $where);
            $state = $this->con->prepare($sql);
            $state->execute(array('widgets'));
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function Last($table) {
        try {
            $state = $this->con->prepare("SELECT last_insert_id() as last FROM {$table}");
            $state->execute();
            $state = $state->fetchObject();
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
        return $state->last;
    }

    public function First($obj) {
        if (isset($obj[0])) {
            return $obj[0];
        } else {
            return null;
        }
    }

    public function setObject($Obj, $Values, $Exits = true) {
        if (is_object($Obj)) {
            if (count($Values) > 0) {
                foreach ($Values as $in => $va) {
                    if (property_exists($Obj, $in) || $Exits) {
                        $Obj->$in = $Values->$in;
                    }
                }
            }
        }
    }

}
