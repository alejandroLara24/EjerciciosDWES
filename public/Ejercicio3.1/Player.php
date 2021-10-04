<?php

class Player {

    private $name;
    private $birthDay;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCard;
    private $redCard;

    /**
     * @param $name
     * @param $birthDay
     * @param $country
     * @param $dorsal
     * @param $position
     * @param $goals
     * @param $matches
     * @param $minutes
     * @param $yellowCard
     * @param $redCard
     */
    public function __construct($name, $birthDay, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard)
    {
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
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
    public function score() {
        $this->goals += 1;
    }
    public function addCard($color) {
        if (strcmp($color,'red')) {
            $this->redCard += 1;
        } elseif (strcmp($color,'yellow')) {
            $this->yellowCard += 1;
        }
    }
    public function playMinutes($min) {
        $this->minutes += $min;
    }
    public function render() {
        echo '<div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">'.$this->dorsal.'</div>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">'.$this->name.'</h5>
                                    <!-- Product price-->
                                    <p>
                                        Posicion: '.$this->position.'<br>
                                        Minutos: '.$this->minutes.'<br>
                                        Goles: '.$this->goals.'
                                    </p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">'.$this->country.'</a></div>
                            </div>
                        </div>
                    </div>';
    }
}