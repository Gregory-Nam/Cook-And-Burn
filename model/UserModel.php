<?php
class UserModel extends Model{

    public function insertUser($_user)
    {
        if($_user->getNameUser() == "ab")
            header('location:deede');
        try{
            $query = 'INSERT INTO user(nom_utilisateur,mot_de_passe, adresse_email) VALUES(:nameUserQ,:passwordQ,:mailAdressQ)';

            $stmt = $this->getBdd()->prepare($query);

            $_nameUserQ = $_user->getNameUser();
            $_passwordQ = $_user->getPassword();
            $_mailAdressQ = $_user->getMailAdress();

            $stmt->bindValue('nameUserQ', $_nameUserQ, PDO::PARAM_STR);
            $stmt->bindValue('passwordQ', $_passwordQ, PDO::PARAM_STR);
            $stmt->bindValue('mailAdressQ', $_mailAdressQ, PDO::PARAM_STR);


            $stmt->execute();
        }
        catch (SQLiteException $e)
        {
            echo $e;
        }

        return true;
    }

    //OTHERS FUNCTION HAVE TO BE CREATED
}