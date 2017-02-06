<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 03/02/2017
 * Time: 14:56
 */

    require_once("Basededonnee.php");
    require_once("object.php");

    $db = new Database;

    if (isset($_REQUEST["id"])){
        $id = $_REQUEST["id"];
        $data = $db->GetData($id);
        $object = new Musee($data);
        $object->buidItem();
    }
    else {
        $data = $db->GetAllData();
        foreach ($data as $dt) {
            $object = new Musee((array)$dt);
            $object->buidItem();
        }
    }