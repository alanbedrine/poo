<?php

class Car {
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private int $energy;
    private int $energyLevel;

    public function _construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start():string {
        return 'Démarre';
    }

    public function forward():string {
        $this->currentSpeed = 15;

        return 'Go !';
    }

    public function break():string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): string {
        return $this->currentSpeed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(): string {
        return $this->energyLevel;
    }

}

?>