<?php

class Ingredients
{
    private $_idL;
    private $_nomIngredient;
    /**
    * Ingredients constructor.
    * @param $_idL
    * @param $_nomIngredient
    */
    public function __construct($_idL, $_nomIngredient)
    {
    $this->_idL = $_idL;
    $this->_nomIngredient = $_nomIngredient;
    }/**
     * @return mixed
     */
    public function getIdL()
    {
        return $this->_idL;
    }/**
     * @param mixed $idL
     */
    public function setIdL($idL)
    {
        $this->_idL = $idL;
    }/**
     * @return mixed
     */
    public function getNomIngredient()
    {
        return $this->_nomIngredient;
    }/**
     * @param mixed $nomIngredient
     */
    public function setNomIngredient($nomIngredient)
    {
        $this->_nomIngredient = $nomIngredient;
    }


}