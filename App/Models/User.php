<?php

namespace App\Models;

class User{
    private static $table = 'users';

    public static function getUser(int $id){
        $pdo = new \PDO(DBDRIVE.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);

        $sql = 'SELECT * FROM '.self::$table.' WHERE id = :id';
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount()>0){
            return $sql->fetch(\PDO::FETCH_ASSOC);
        }else{
            throw new \Exception('Nenhum usuario foi encontrado');
        }
    }

    public static function getAll(){

        $pdo = new \PDO(DBDRIVE.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);

        $sql = $pdo->query('SELECT * FROM '.self::$table);

        $sql->execute();

        if($sql->rowCount()>0){
            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            throw new \Exception('Nenhum usuario foi encontrado');
        }
    }
}