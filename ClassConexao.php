<?php
abstract class ClassConexao{
public function Conectar()
{
    try{
        $Con=new PDO("mysql:host=localhost;dbname=sistema","user","password");
        return $Con;
    }catch (PDOException $Erro){
        return $Erro->getMessage();
    }
}
}
