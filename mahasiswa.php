<?php
    class mahasiswa{
        private $NIM;

        public function SETNIM($nomor){
            $this->NIM = $nomor;
        }
        public function GETNIM(){
            return $this->NIM;
        }
    }