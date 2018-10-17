<?php

class Burn {
    private $_idB;
    private $_idU;
    private $_idR;

    /**
     * Burn constructor.
     * @param $_idB
     * @param $_idU
     * @param $_idR
     */
    public function __construct($_idU, $_idR)
    {
        $this->_idU = $_idU;
        $this->_idR = $_idR;
    }

    /**
     * @return mixed
     */
    public function getIdB()
    {
        return $this->_idB;
    }

    /**
     * @param mixed $idB
     */
    public function setIdB($idB)
    {
        if(is_numeric($idB))
            $this->_idB = $idB;
    }

    /**
     * @return mixed
     */
    public function getIdU()
    {
        return $this->_idU;
    }

    /**
     * @param mixed $idU
     */
    public function setIdU($idU)
    {
        if(is_numeric($idU))
            $this->_idU = $idU;
    }

    /**
     * @return mixed
     */
    public function getIdR()
    {
        return $this->_idR;
    }

    /**
     * @param mixed $idR
     */
    public function setIdR($idR)
    {
        if(is_numeric($idR))
            $this->_idR = $idR;
    }




}