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

    public function verifUser($_user)
    {
        if($_user->getNameUser() == "ab")
            header('location:deede');
        try{
            $query = ('SELECT nom_utilisateur FROM user WHERE nom_utilisateur = ?');

            $stmt = $this->getBdd()->prepare($query);

            $_nameUserQ = $_user->getNameUser();
            $stmt->execute(array($_nameUserQ));
            if($stmt->fetch()== true){
                return true;
            }

        }
        catch (SQLiteException $e)
        {
            echo $e;
        }

        return false;
    }

    public function verifUserEmail($_user)
    {
        if($_user->getNameUser() == "ab")
            header('location:deede');
        try{
            $query = ('SELECT adresse_email FROM user WHERE adresse_email = ?');

            $stmt = $this->getBdd()->prepare($query);

            
            $_mailAdressQ = $_user->getMailAdress();
            $stmt->execute(array($_mailAdressQ));
            if($stmt->fetch()== true){
                return true;
            }

        }
        catch (SQLiteException $e)
        {
            echo $e;
        }

        return false;
    }
}
