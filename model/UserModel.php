<?php
class UserModel extends Model{
    public function insertUser($_user)
    {
        $this->getBdd();
        $query = 'INSERT INTO user(nom_utilisateur,mot_de_passe, adresse_email
                date_inscription) VALUES(:nameUserQ,:passwordQ,:mailAdressQ, :inscriptionDateQ)';

        $stmt = $this->prepare($query);

        $_nameUserQ = $_user->getUserName();
        $_passwordQ = $_user->getPassword();
        $_mailAdressQ = $_user->getMailAdress();
        $_inscriptionDateQ = $_user->getInscriptionData();

        $stmt->bindValue('nameUserQ', $_nameUserQ, PDO::PARAM_STR);
        $stmt->bindValue('passwordQ', $_passwordQ, PDO::PARAM_STR);
        $stmt->bindValue('mailAdressQ', $_mailAdressQ, PDO::PARAM_STR);
        $stmt->bindValue('inscriptionDateQ', $_inscriptionDateQ, PDO::PARAM_STR);


        $stmt->execute();
    }

    //OTHERS FUNCTION HAVE TO BE CREATED
}