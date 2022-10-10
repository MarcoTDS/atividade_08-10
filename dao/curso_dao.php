<?php
include_once ("./util/conexao.php");

    #Classe DAO para o model do Curso

    class CursoDao{
        public function list(){
            
            $conn = conectar_db();
            $sql = "SELECT * FROM cursos";
            $stm = $conn->prepare($sql);
            $stm->execute();
            $result = $stm->fetchAll();

            $cursos = array();
            foreach($result as $reg):
                $curso = new Curso($reg['idCurso'], $reg['nome']);
                array_push($cursos, $curso);
            endforeach;

            return $cursos;

        }
    }

?>