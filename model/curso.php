<?php

    #Arquivo com a declaração da classe Curso

    class Curso{
        private $idCurso;
        private $nomeCurso;

        public function __construct($idCurso, $nomeCurso){
            $this->idCurso = $idCurso;
            $this->nomeCurso = $nomeCurso;
        }

        public function getIdCurso(){
            return $this->idCurso;
        }
        public function setIdCurso($idCurso){
            $this->idCurso = $idCurso;
        }
        public function getNomeCurso(){
            return $this->nomeCurso;
        }
        public function setNomeCurso($nomeCurso){
            $this->nomeCurso = $nomeCurso;
        }


    }

?>