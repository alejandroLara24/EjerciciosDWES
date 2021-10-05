<?php

abstract class Member {

    protected $name;
    protected $birthDay;
    protected $country;
    protected $yellowCard;
    protected $redCard;

    /**
     * @param $name
     * @param $birthDay
     * @param $country
     * @param $yellowCard
     * @param $redCard
     */
    public function __construct($name, $birthDay, $country, $yellowCard, $redCard) {
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->country = $country;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function age() {
        list($dia,$mes,$ano) = explode("/",$this->birthDay);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }

    public function addCard($color) {
        if (strcmp($color,'red')) {
            $this->redCard += 1;
        } elseif (strcmp($color,'yellow')) {
            $this->yellowCard += 1;
        }
    }

    abstract public function render();
}