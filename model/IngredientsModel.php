<?php

class IngredientsModel extends Model
{
    public function getAll()
    {
        $query = 'SELECT * FROM ingredients ORDER BY idL asc';
        $var = [];
        $req = $this->getBdd()->prepare($query);
        $req->execute();

        while($data = $req->fetch())
        {

            $var[] = new Ingredients($data['idL'], $data['nom_ingredient']);

        }

        return $var;
//        $req->closeCursor();
    }
}