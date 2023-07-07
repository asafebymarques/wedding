<?php
class Presenca extends Model{

    public function inserirPresenca($nome,$telefone){
        $sql = "INSERT INTO presencas SET nome = :nome , telefone = :telefone";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':telefone',$telefone);
        $sql->execute();
    }

    public function getPresencas(){
        $array = array();
        $sql = "SELECT C.nome, C.telefone FROM `presencas` AS C";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
}