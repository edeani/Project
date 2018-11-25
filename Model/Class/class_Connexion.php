<?php
    class Connexion{
        //region Properties
            private $host;
            private $user;
            private $pass;
            private $database;
        //endregion
        //region Construct
            public function __construct($newHost, $newUser, $newPass, $newDatabase){
                $this->host = $newHost;
                $this->user = $newUser;
                $this->pass = $newPass;
                $this->database = $newDatabase;
            }
        //endregion
        //region Methods
            public function getConnexion(){
                return new mysqli("$this->host", "$this->user", "$this->pass", "$this->database");
            }
        //endregion
    }