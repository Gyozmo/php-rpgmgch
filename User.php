<?php
class User {
    private $id;
    private $email;
    private $createdAt; //Ajouter les accesseurs nécessaires et rendez ces attributes privés. 

    public function getId($id)  //
    {                           // permet de tester l'existance d'une methode dans une class ou un objet
        return $this->$id;      //
    }                           // 
}
?>