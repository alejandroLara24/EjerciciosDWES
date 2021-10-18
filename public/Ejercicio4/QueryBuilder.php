<?php

namespace App;

use PDO;

class QueryBuilder
{
    protected $conn;

    /**
     * @param $conn
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function findById($nomTaula,$id) {
        $pdoSt = $this->conn->prepare("SELECT * FROM $nomTaula WHERE dni = '$id'");
        $pdoSt->execute();
        return $pdoSt->fetch(PDO::FETCH_OBJ);
    }

    public function findAll($nomTaula) {
        $pdoSt = $this->conn->prepare("SELECT * FROM $nomTaula");
        $pdoSt->execute();
        return $pdoSt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($nomTaula,$campos) {
        $pdoSt = $this->conn->prepare("INSERT INTO $nomTaula (dni,Nom,DataDeNaixement,Sexe,Hobby,Foto) VALUES (?,?,?,?,?,?)");
        $pdoSt->bindParam(1,$campos[0]);
        $pdoSt->bindParam(2,$campos[1]);
        $pdoSt->bindParam(3,$campos[2]);
        $pdoSt->bindParam(4,$campos[3]);
        $pdoSt->bindParam(5,$campos[4]);
        $pdoSt->bindParam(6,$campos[5]);
        $pdoSt->execute();
        return $pdoSt;
    }
/*
 * pdost = $query->findById('tabla',id)
 *
 */
}