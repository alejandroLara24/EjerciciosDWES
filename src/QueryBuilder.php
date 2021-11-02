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

    public function insert($table,$parametres){
        $stpdo = $this->conn->prepare(insert($table,$parametres));
        foreach ($parametres as $key => $value){
            $stpdo->bindValue(":$key",$value);
        }
        $stpdo->execute();
    }

    public function login($table,$email,$password){
        $stpdo = $this->conn->prepare("SELECT * FROM $table WHERE email = :email");
        $stpdo->bindValue(":email",$email);
        $stpdo->execute();
        $user = $stpdo->fetch(\PDO::FETCH_OBJ);
        if (password_verify($password, $user->password)) return $user;
        return null;
    }

    public function selectWhereUnique($table,$key,$value){
        $stpdo = $this->conn->prepare("SELECT * FROM {$table} WHERE `$key` = :value ");
        $stpdo->bindParam(":value",$value);
        $this->execute($stpdo);

        return $stpdo->fetch(\PDO::FETCH_OBJ);
    }

    public function insertalumnes($nomTaula,$campos) {
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

}