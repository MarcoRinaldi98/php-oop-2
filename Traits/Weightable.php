<?php

    trait Weightable {

    protected $weight;
    protected $measureUnit;

    public function setWeight(float $weight, string $measureUnit) {
        $this->weight = $weight;
        $this->measureUnit = $measureUnit;

        if (!is_numeric($weight)) {
            throw new Exception('Il valore passato non è un numero valido');
        } 
    }

    public function getWeight() {
        return $this->weight . ' ' . $this->measureUnit;
    }

}

?>