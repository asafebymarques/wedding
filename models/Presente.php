<?php
class Presente extends Model{

    public function getPresentes(){
        $array = array();
        $sql = "SELECT * FROM presentes WHERE qtd >= 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function getPresente($id){
        $array = array();
        $sql = "SELECT * FROM presentes WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();
        }
        return $array;
    }
}