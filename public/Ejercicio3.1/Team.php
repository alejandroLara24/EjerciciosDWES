<?php

class Team {

    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $scoreGoals;
    private $concededGoals;

    /**
     * @param $name
     * @param $players
     * @param $matches
     * @param $won
     * @param $lost
     * @param $tie
     * @param $scoreGoals
     * @param $concededGoals
     */
    public function __construct($name, $players, $matches=0, $won=0, $lost=0, $tie=0, $scoreGoals=0, $concededGoals=0)
    {
        $this->name = $name;
        $this->players = $players;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoreGoals = $scoreGoals;
        $this->concededGoals = $concededGoals;
    }

    /**
     * @return mixed
     */
    public function getPlayers() {
        return $this->players;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    public function render() {
        require_once("team.view.php");
    }
    public function signPlayer(Member $player) {
        array_push($this->players, $player);
    }
}