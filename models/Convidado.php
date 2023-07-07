<?php
class Convidado extends Model{

    public function inserirConvidado($nome,$telefone,$fk_presente){
        $sql = "INSERT INTO convidados SET nome = :nome , telefone = :telefone, fk_presente = :fk_presente";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':telefone',$telefone);
        $sql->bindValue(':fk_presente',$fk_presente);
        $sql->execute();

        $array = array();
        $sql = "SELECT * FROM presentes WHERE id = :fk_presente";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':fk_presente',$fk_presente);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();
            $qtd = $array['qtd'] - 1;
            $sql = "UPDATE presentes SET qtd = :qtd WHERE id = :fk_presente";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':qtd',$qtd);
            $sql->bindValue(':fk_presente',$fk_presente);
            $sql->execute();

            print_r('executou');
        }
    }

    public function getConvidados(){
        $array = array();
        $sql = "SELECT C.nome, C.telefone, P.descricao, P.qtd FROM `convidados` AS C INNER JOIN presentes AS P ON (C.fk_presente = P.id)";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
}