<?php
   class Utente {
       private $idUt;
       private $nomeUt;
       private $cognomeUT;
       private $email;
       private $dataIscr;
       private $tipoAbb;  //array

       public function __construct($id, $nome, $cognome, $em, $data, $abb) {
           $this->idUt = $id;
           $this->nomeUt = $nome;
           $this->cognomeUt = $cognome;
           $this->email = $em;
           $this->dataIscr = $data;
           $this->tipoAbb = $abb;
       }

       public function setIdUt($id) {
           $this->idUt = $id;
       }
       public function getIdUt() {
           return $this->IdUt;
       }
       public function setNomeUt($nome) {
           $this->nomeUt = $nome;
       }
       public function getNomeUt() {
           return $this->nomeUt;
       } 
       public function setCognomeUt($cognome) {
           $this->cognomeUt = $cognome;
       }
       public function getCognomeUt() {
           return $this->cognomeUt = $cognome;
       }
       public function setEmail($em) {
           $this->email = $em;
       }
       public function getEmail() {
           return $this->email = $em;
       }
       public function setDataIscr($data) {
           $this->dataIscr = $data;
       }
       public function getDataIscr() {
           return $this->dataIscr = $data;
       }
       public function setTipoAbb($abb) {
           $this->tipoAbb = $abb;
       }
       public function getTipoAbb() {
           return $this->tipoAbb = $abb;
       }
   }

?>
