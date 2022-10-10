<?php

include_once ("./util/conexao.php");

//Classe DAO para o model do Aluno

class AlunoDao{
    public function list(){
        
        $conn = conectar_db();
        $sql = "SELECT * FROM alunos INNER JOIN cursos ON alunos.id_curso = cursos.id_curso";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        $alunos = array();
        foreach($result as $reg):
            $aluno = new Aluno($reg["idAluno"], $reg["nomeAluno"], $reg["idadeAluno"], $reg["estrangeiro"], $reg["curso"], $curso);
            array_push($alunos, $aluno);
        endforeach;

        return $alunos;

    }
}


?>