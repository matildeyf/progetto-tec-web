<?php
   class Utente {
       private $nome;
       private $cognome;
       private $email;
       private $data_iscrizione;
       private $tipo_abbonamento; //array

       public function __construct($nome, $cognome, $email, $data_iscrizione, $tipo_abbonamento) {
           $this->nome = $nome; //nome di questa classe (this)
           $this->cognome = $cognome;
           $this->email = $email;
           $this->data_iscrizione = $data_iscrizione;
           $this->tipo_abbonamento = $tipo_abbonamento;
       }
//fare prima le get che le set x tutti



       public function setNome($nome) {   //x modificare attributo dell'oggetto
           $this->nome = $nome;
       }
       public function getNome() {  //x estrarre dati dall'oggetto
           return $this->nome;    //posso anche togliere il this e lasciare $nome: non ci sono dubbi su cosa sia nome, l'unico nome che conosce è l'attributo dell'ogg utente perchè è dichiarato nella mia classe
       }
       public function setCognome($cognome) {
           $this->cognome = $cognome;
       }
       public function getCognome() {
           return $this->cognome;
       }
       public function setEmail($email) {
           $this->email = $email;
       }
       public function getEmail() {
           return $this->email;
       }
       public function setData_iscrizione($data_iscrizione) {
           $this->data_iscrizione = $data_iscrizione;
       }
       public function getData_iscrizione() {
           return $this->data_iscrizione;
       }
       public function setTipo_abbonamento($tipo_abbonamento) {
           $this->tipo_abbonamento = $tipo_abbonamento;
       }
       public function getTipo_abbonamento() {
           return $this->tipo_abbonamento;
       }
   }

?>
