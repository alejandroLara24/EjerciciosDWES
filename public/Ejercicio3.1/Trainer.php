<?php
require_once('Member.php');
class Trainer extends Member {
    private $charge;

    /**
     * @param $charge
     */
    public function __construct($name, $birthDay, $country, $yellowCard, $redCard, $charge) {
        parent::__construct($name,$birthDay,$country,$yellowCard,$redCard);
        $this->charge = $charge;
    }

    public function render(){
        echo '<div class="col mb-5" style="background-color: #0dcaf0">
                        <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">'.$this->name.'</h5>
                                    <!-- Product price-->
                                    <p>
                                        Edad: '.$this->age().'<br>
                                        Cargo: '.$this->charge.'<br>
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