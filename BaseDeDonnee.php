<?php

/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 03/02/2017
 * Time: 14:57
 */

class Database
{

    private $bdd;

    public function __construct() {
        $this->Connection();
    }

    private function Connection() {
        $host   = "localhost";
        $base   = "muse_de_france";
        $login  = "root";
        $pass    = "";

        try {
            $bdd = new PDO('mysql:host='. $host .';dbname='. $base, $login, $pass);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur : '. $e->getMessage());
        }

        $this->bdd = $bdd;
    }

    public function GetByCp($cp) {
        if (!empty($cp)) {
            $query  = $this->bdd->query("SELECT * FROM musee WHERE CP = $cp");
            $fetch  = $query->fetch();
            $data   = $fetch == false ? ["error" => true, "message" => "Result not found"] : $fetch;
        } else {
            $data = ["error" => true, "message" => "No CP selected"];
        }
        return $data;
    }

    public function GetByDep($dep) {
        if (!empty($dep)) {
            $query  = $this->bdd->query("SELECT * FROM musee WHERE NOMDEP = $dep");
            $fetch  = $query->fetch();
            $data   = $fetch == false ? ["error" => true, "message" => "Result not found"] : $fetch;
        } else {
            $data = ["error" => true, "message" => "No DEP selected"];
        }
        return $data;
    }

    public function GetByReg($reg) {
        if (!empty($reg)) {
            $query  = $this->bdd->query("SELECT * FROM musee WHERE NOMREG = $reg");
            $fetch  = $query->fetch();
            $data   = $fetch == false ? ["error" => true, "message" => "Result not found"] : $fetch;
        } else {
            $data = ["error" => true, "message" => "No REG selected"];
        }
        return $data;
    }

    public function GetData($id) {
        if (!empty($id)) {
            $query  = $this->bdd->query("SELECT * FROM musee WHERE id = $id");
            $fetch  = $query->fetch();
            $data   = $fetch == false ? ["error" => true, "message" => "Result not found"] : $fetch;
        } else {
            $data = ["error" => true, "message" => "No ID selected"];
        }
        return $data;
    }

    public function GetAllData() {
        $query  = $this->bdd->prepare("SELECT * FROM musee");
        $query->execute();
        $row=$query->fetchAll(PDO::FETCH_OBJ);
        $data   = $row == false ? ["error" => true, "message" => "Result not found"] : $row;

        return $data;
    }
}
