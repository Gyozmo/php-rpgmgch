<?php
class User {
    private $id;
    private $email;
    private $createdAt; //Ajouter les accesseurs nécessaires et rendez ces attributes privés. 

    public function getId($id)
    {
        return $this->$id;
    }
}
?>