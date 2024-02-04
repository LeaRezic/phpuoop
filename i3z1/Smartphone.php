<?php

abstract class Smartphone
{
    protected $marka;
    protected $model;
    protected $baterija; // u mAh

    abstract function vrijemePunjenja($punjac);

    function getMarka()
    {
        return $this->marka;
    }

    function setMarka($param)
    {
        $this->marka = $param;
    }

    function getModel()
    {
        return $this->model;
    }

    function setModel($param)
    {
        $this->model = $param;
    }

    function getBaterija()
    {
        return $this->baterija;
    }

    function setBaterija($param)
    {
        $this->baterija = $param;
    }
}
