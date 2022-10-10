<?php

    #Arquivo com a declaração da classe Curso
    public class Aluno{
        private $idAluno;
        private $nomeAluno;
        private $idadeAluno;
        private $estrangeiro;
        private $curso;

        public function __construct($idAluno, $nomeAluno, $idadeAluno, $estrangeiro, $curso){
            $this->idAluno = $idAluno;
            $this->nomeAluno = $nomeAluno;
            $this->idadeAluno = $idadeAluno;
            $this->estrangeiro = $estrangeiro;
            $this->curso = $curso;
        }

        public function getIdAluno(){
            return $this->idAluno;
        }
        public function setIdAluno($idAluno){
            $this->idAluno = $idAluno;
        }
        public function getNomeAluno(){
            return $this->nomeAluno;
        }
        public function setNomeAluno($nomeAluno){
            $this->nomeAluno = $nomeAluno;
        }
        public function getIdadeAluno(){
            return $this->idadeAluno;
        }
        public function setIdadeAluno($idadeAluno){
            $this->idadeAluno = $idadeAluno;
        }
        public function getEstrangeiro(){
            return $this->estrangeiro;
        }
        public function setEstrangeiro($estrangeiro){
            $this->estrangeiro = $estrangeiro;
        }
        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($curso){
            $this->curso = $curso;
        }
    }

?>