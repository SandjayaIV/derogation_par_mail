<?php
class Individu{
    /* Attribut */ 

    private $prenom
    private $nom 
    private $date_naissance
    private $adresse 
    private $choix


    /* Constructor */

    public function _construct($prenom,$nom,$date_naissance,$adresse,$choix){
        $this->prenom = $prenom 
        $this->nom = $nom
        $this->date_naissance = $date_naissance 
        $this->adresse = $adresse
        $this->choix = $choix


    }

    /* setter */

    public function setPrenom($prenom){
        this->$prenom = $prenom;
    }
    public function setNom($nom){
        this->$nom = $nom;
    }

    public function setDate_naissance($date_naissance){
        this->$date_naissance = $date_naissance;
    }

    public function setAdresse($adresse){
        this->$adresse = $adresse;
    }

    public function setChoix($choix){
        this->$choix = $choix;
    }

    /* getter */

    public function getPrenom(){
        return this->$prenom;
    }

    public function getNom(){
        return this->$nom;
    }

    public function getDate_naissance(){
        return this->$date_naissance;
    }

    public function getAdresse(){
        return this->$adresse;
    }

    public function getChoix(){
        return this->$choix;
    }
}