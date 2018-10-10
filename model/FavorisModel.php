<?php
class FavorisModel extends Favoris
{
    public function insertFavoris($aFavoris)
    {
        $query = 'INSERT INTO user(nom_utilisateur,mot_de_passe, adresse_email, confirmkey) VALUES(:nameUserQ,:passwordQ,:mailAdressQ, :confirmkeyQ)';

        $query = 'INSERT INTO favoris(idRec, idUser, nomRec, nomUser)  VALUES(:idRecQ, :idUserQ, :nomRecQ, :nomUserQ)';
        $stmt = $this->getBdd()->prepare($query);

        $_idRecQ = $aFavoris->getIdRec();
        $_idUserQ = $aFavoris->getIdUser();
        $_nomRecQ = $aFavoris->getNomRecette();
        $_nomUserQ = $aFavoris->getNomUser();
        $stmt->bindValue('idRec', $_idRecQ, PDO::PARAM_STR);
        $stmt->bindValue('idUser',$_idUserQ, PDO::PARAM_STR);
        $stmt->bindValue('nomRec', $_nomRecQ, PDO::PARAM_STR);
        $stmt->bindValue('nomUser', $_nomUserQ, PDO::PARAM_STR);

        $stmt->execute();
    }

}